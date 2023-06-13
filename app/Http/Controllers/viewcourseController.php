<?php

namespace App\Http\Controllers;

use App\Models\year_level;
use App\Models\CourseSection;
use Illuminate\Http\Request;

class viewcourseController extends Controller
{
    public function index(Request $request){

        $courseName = $request->input('course');
        $course =  CourseSection::where('Course_name', $courseName)->where('status','active')->value('id');
        $yearLevel = year_level::where('course_id', $course)->where('status','active')->get();
        return view('viewcourse',compact('yearLevel'));
    }
}
