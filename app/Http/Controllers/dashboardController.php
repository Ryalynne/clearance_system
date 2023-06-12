<?php

namespace App\Http\Controllers;

use App\Models\student_enrollment;
use App\Models\student_info;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $bsit = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%bsit%')->count();
        $bshm = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%bshm%')->count();
        $bstm = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%bstm%')->count();
        $bsais = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%bsais%')->count();
        $bsba = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%bsba%')->count();
        $act = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%act%')->count();
        $abm = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%abm%')->count();
        $stem = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%stem%')->count();
        $humss = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%humss%')->count();
        $it = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%it%')->count();
        $to = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%to%')->count();
        $ca = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%ca%')->count();
        $ga = student_enrollment::where("school_year", now()->year)->where('class', 'like', '%ga%')->count();
        $student = student_enrollment::paginate(10);
        $department = User::get();

        return view('dashboard', compact('bsit', 'bshm', 'bstm', 'bsais', 'bsba', 'act','student', 'department','abm','stem','humss','it','to','ca','ga'));

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
        $enrollment->class = $request->class ."-". $request->section;
        $enrollment->save();
        return back();
    }


    public function registerUser(Request $request) {
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

}
