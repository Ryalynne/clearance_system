<?php

namespace App\Http\Controllers;

use App\Models\student_enrollment;
use App\Models\student_info;
use App\Models\User;
use App\Models\CourseSection;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(Request $request)
    {
       
       
        if ($request->input('student_number')) {
            $studentinfo = student_info::where('student_number',$request->input('student_number'))->value('id');
            $student = student_enrollment::where('student_id', $studentinfo)->paginate(20);
        } else {
            $student = student_enrollment::paginate(20);
        }
        $shsCourses = CourseSection::where('Designated_name', 'shs')->where('status','active')->get();
        $collegeCourses = CourseSection::where('Designated_name', 'college')->where('status','active')->get();
        $department = User::get();

        return view('dashboard', compact('collegeCourses','shsCourses','student','department'));

    }
    public function registerStudent(Request $request)
    {
        $student = new student_info;
        $student->student_number = $request->student_number;
        $student->first_name = $request->first_name;
        $student->middle_name = $request->middle_name;
        $student->last_name = $request->last_name;
        $student->save();

        $enrollment = new student_enrollment;
        $enrollment->student_id = $student->id;
        $enrollment->semester = $request->semester;
        $enrollment->school_year = $request->school_year;
        $enrollment->class = $request->class . "-" . $request->section;
        $enrollment->save();
        return back();
    }


    public function registerUser(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new user;
        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->department = $request->department;
        $user->password = bcrypt($request->password);
        $user->save();
        return back();
    }

    public function  get_student($id)
    {
        $student  = student_enrollment::find($id);
        return compact('student');
    }

    public function  get_enrollment($id)
    {
        $studentId = student_enrollment::where('id', $id)->value('student_id');
        $enrollment = student_info::where('id', $studentId)->first();
        return compact('enrollment');
    }


    public function updateStudent(Request $request)
    {
        try {
            $enrollment = student_enrollment::find($request->student_id);

            $enrollment->update([
                'school_year' => $request->school_year,
                'semester' => $request->semester,
                'class' => $request->class . '-' . $request->section,
            ]);
            $student = student_info::where('id', $request->student_id)->get();
            $student->update([
                'student_number' => $request->student_number,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
            ]);
            return back();
        } catch (Exception $e) {
            return back();
        }
    }

    function updateaccount(Request $request)
    {
        $account = User::find($request->id);
        $account->update([
            // 'password' => $request->password,
            'department' => $request->department,
        ]);

        return back();
    }

    function ressetaccount(Request $request)
    {
        $account = User::find($request->id);
        $account->update([
             'password' => "sti_baliuag148",
        ]);

        return back();
    }


    public function get_account($id){
        $account  = User::find($id);
        return compact('account');
    }

    public function get_reset($id){
        $account  = User::find($id);
        return compact('account');
    }
}
