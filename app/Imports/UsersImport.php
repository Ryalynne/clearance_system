<?php

namespace App\Imports;

use App\Models\student_enrollment;
use App\Models\student_info;
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
    // public function model(array $row)
    // {
    //     // Skip the header row
    //     if (
    //         $row[0] === "Student Number" && $row[1] === "First Name" && $row[2] === "Middle Name" && $row[3] === "Last Name"
    //         && $row[4] === "Semester" && $row[5] === "School Year" && $row[6] === "Class"
    //     ) {
    //         return null;
    //     }

    //     try {
    //         $existingStudent = student_info::where('student_number', $row[0])->first();

    //         if ($existingStudent) {
    //             $existingEnrollment = student_enrollment::where('student_id', $existingStudent->id)
    //                 ->where('semester', $row[4])
    //                 ->first();

    //             if ($existingEnrollment) {
    //                 // Skip the row if the student_number already exists for the same semester
    //                 return null;
    //             }
    //         } else {
    //             $studentInfo = new student_info([
    //                 "student_number" => $row[0],
    //                 "first_name" => $row[1],
    //                 "middle_name" => $row[2],
    //                 "last_name" => $row[3],
    //             ]);

    //             $studentInfo->save(); // Save the student_info model to generate an ID
    //             $existingStudent = $studentInfo; // Assign the created student_info model to $existingStudent
    //         }

    //         $schoolYear = date('Y', strtotime($row[5]));

    //         $studentEnrollment = new student_enrollment([
    //             "student_id" => $existingStudent->id,
    //             "school_year" => $schoolYear,
    //             "semester" => $row[4],
    //             "class" => $row[6],
    //         ]);

    //         $studentEnrollment->save(); // Save the student_enrollment model

    //         return $studentEnrollment; // Return the student_enrollment model
    //     } catch (Exception $e) {
    //         // Handle the exception here
    //         return null;
    //     }
    // }
    public function model(array $row)
    {
        // Skip the header row
        if (
            $row[0] === "Student Number" && $row[1] === "First Name" && $row[2] === "Middle Name" && $row[3] === "Last Name"
            && $row[4] === "Semester" && $row[5] === "School Year" && $row[6] === "Class"
        ) {
            return null;
        }
    
        try {
            $existingStudent = student_info::where('student_number', $row[0])->first();
    
            if ($existingStudent) {
                $existingEnrollment = student_enrollment::where('student_id', $existingStudent->id)
                    ->where('semester', $row[4])
                    ->where('school_year', $row[5])
                    ->first();
    
                if ($existingEnrollment) {
                    // Skip the row if the student_number already exists for the same semester and school year
                    return null;
                }
            } else {
                $studentInfo = new student_info([
                    "student_number" => $row[0],
                    "first_name" => $row[1],
                    "middle_name" => $row[2],
                    "last_name" => $row[3],
                ]);
    
                $studentInfo->save(); // Save the student_info model to generate an ID
                $existingStudent = $studentInfo; // Assign the created student_info model to $existingStudent
            }
    
            $studentEnrollment = new student_enrollment([
                "student_id" => $existingStudent->id,
                "school_year" => $row[5],
                "semester" => $row[4],
                "class" => $row[6],
            ]);
    
            $studentEnrollment->save(); // Save the student_enrollment model
    
            return $studentEnrollment; // Return the student_enrollment model
        } catch (Exception $e) {
            // Handle the exception here
            return null;
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
