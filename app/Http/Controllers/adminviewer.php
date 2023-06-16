<?php

namespace App\Http\Controllers;

use App\Models\CourseSection;
use Illuminate\Http\Request;

class adminviewer extends Controller
{
   public function index(){
    $shsCourses = CourseSection::where('Designated_name', 'shs')->where('status','active')->get();
    $collegeCourses = CourseSection::where('Designated_name', 'college')->where('status','active')->get();
     return view('adminviewer',compact('shsCourses', 'collegeCourses'));
   }
}
