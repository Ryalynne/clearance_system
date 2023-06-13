<?php

namespace App\Http\Controllers;

use App\Models\student_clearance;
use App\Models\student_enrollment;
use App\Models\student_info;
use Exception;
use Illuminate\Http\Request;

class viewsectionController extends Controller
{
    public function index(Request $request)
    {
        $sem = $request->input('sem');
        $class = $request->input('Request');
        $year = $request->input('year');
        $student = null;
        $student = student_enrollment::where('class', $class)->where('semester', $sem)->where('school_year', $year)->paginate(10);
        if ($student === null) {
            return false;
        }
        return view('viewsection', compact('student'));
    }

    function student_clearance(Request $request)
    {
        $check_data = student_clearance::where('student_id', $request->student)
            ->where('department', $request->department)
            ->where('semester', $request->semester)
            ->where('status', 0)
            ->first();

        if ($check_data) {
            $check_data->remarks = $request->remarks;
            $check_data->save();
        } else {
            $value = array(
                'student_id' => $request->student,
                'department' => $request->department,
                'remarks' => $request->remarks,
                'status' => 0,
                'semester' => $request->semester
            );
            student_clearance::create($value);
        }
    }

    function student_clearanceupdate(Request $request)
    {
        $check_data = student_clearance::find($request->id);

        if ($check_data) {
            $check_data->status = '1';
            $check_data->save();
        }
    }

}
