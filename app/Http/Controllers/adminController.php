<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\student_info;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class adminController extends Controller
{
    public function index(){
        $student = student_info::paginate(10);
        $department = User::get();
        return view('admin',compact('student', 'department'));
    }
}
