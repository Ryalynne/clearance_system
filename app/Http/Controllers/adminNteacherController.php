<?php

namespace App\Http\Controllers;

use App\Models\student_enrollment;
use Illuminate\Http\Request;

class adminNteacherController extends Controller
{
   public function index(Request $request){
    $sem = $request->input('sem');
    $class = $request->input('Request');
    $student = null;
    $student = student_enrollment::where('class', $class)->where('semester', $sem)->where('school_year', now())->paginate(10);

    if ($student === null) {
        return false;
    }

    return view('adminviewsection',compact('student'));
   }
}
