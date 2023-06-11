<?php

namespace App\Imports;

use App\Models\student_enrollment;
use App\Models\student_info;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Facades\Excel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        try {
            // Check if the student_number already exists
            $existingStudent = student_info::where('student_number', $row[0])->first();

            if ($existingStudent) {
                // Skip the row if the student_number already exists
                return null;
            }

            $studentInfo = new student_info([
                "student_number" => $row[0],
                "first_name" => $row[1],
                "middle_name" => $row[2],
                "last_name" => $row[3],
            ]);

            $studentInfo->save(); // Save the student_info model to generate an id
            $schoolYear = date('Y', strtotime($row[5]));
            $studentEnrollment = new student_enrollment([
                "student_id" => $studentInfo->id,
                "school_year" => $schoolYear,
                "semester" => $row[4],
                "class" => $row[6],
            ]);

            return $studentEnrollment;
        } catch (Exception $e) {
            return "There is an extra column or the column is null";
        }
    }
    public function uploadUsers(Request $request)
    {
        try {
            $file = $request->file('file');

            Excel::import(new UsersImport, $file);


            return back();
        } catch (Exception $e) {
            return "insert excel file";
        }

        // return redirect()->route('users.index')->with('success', 'User Imported Successfully');
    }
}
