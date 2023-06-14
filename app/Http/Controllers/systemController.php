<?php

namespace App\Http\Controllers;

use App\Models\CourseSection;
use App\Models\User;
use App\Models\year_level;
use Illuminate\Http\Request;

class systemController extends Controller
{
    public function index()
    {

        $course = CourseSection::get();
        $section = year_level::get();
        return view('systemManagement', compact('course', 'section'));
    }

    public function addcourse(Request $request)
    {
        CourseSection::create([
            'Course_label' => $request->course_name,
            'Course_name' => $request->course_title,
            'Designated_name' => $request->designated_name
        ]);
        return back();
    }

    public function addclass(Request $request)
    {
        year_level::create([
            'course_id' => $request->course_id,
            'year_level' => $request->year_level,
        ]);
        return back();
    }

    function updatecourse(Request $request)
    {
        $course = CourseSection::find($request->id);

  
        $course->update([
            'Course_label' => $request->course_title,
            'Course_name' => $request->course_name,
            'Designated_name' => $request->designated_name,
            'status' => $request->status,
        ]);

        return back();
    }
    public function updateclass(Request $request){
        $class = year_level::find($request->id);
        $class->update([
            'year_level' => $request->year_level,
            'status' => $request->status
        ]);

        return back();

    }

    function updatepassword(Request $request)
    {
        $account = User::find($request->id);
        $account->update([
            'password' => $request->password,
            'department' => $request->department,
        ]);

        return back();
    }
    public function get_account($id){
        $account  = User::find($id);
        return compact('account');
    }

    public function get_course($id){
        $course  = CourseSection::find($id);
        return compact('course');
    }

    public function get_section($id){
        $section = year_level::find($id);
        return compact('section');
    }

}
