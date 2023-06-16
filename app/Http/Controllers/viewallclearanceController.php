<?php

namespace App\Http\Controllers;

use App\Models\student_clearance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewallclearanceController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->input('year');
        $year1 = $request->input('year1');
        $class = $request->input('class');
        $section = $request->input('section');
        
        if ($class != "" && $section != "") {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->where('student_enrollments.class', $class . '-' . $section)
                ->groupBy('student_clearances.id')
                ->select(
                    DB::raw('ANY_VALUE(student_enrollments.class) as class'),
                    DB::raw('ANY_VALUE(student_enrollments.school_year) as school_year'),
                    'student_clearances.id',
                    'student_clearances.student_id',
                    'student_infos.student_number',
                    'student_infos.first_name',
                    'student_infos.middle_name',
                    'student_infos.last_name',
                    'student_clearances.semester',
                    'student_clearances.status',
                    'student_clearances.remarks',
                    'student_clearances.department',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->paginate(15);
        } else if ($class) {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->where('student_enrollments.class', 'LIKE', '%' . $class . '%')
                ->groupBy('student_clearances.id')
                ->select(
                    DB::raw('ANY_VALUE(student_enrollments.class) as class'),
                    DB::raw('ANY_VALUE(student_enrollments.school_year) as school_year'),
                    'student_clearances.id',
                    'student_clearances.student_id',
                    'student_infos.student_number',
                    'student_infos.first_name',
                    'student_infos.middle_name',
                    'student_infos.last_name',
                    'student_clearances.semester',
                    'student_clearances.status',
                    'student_clearances.remarks',
                    'student_clearances.department',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->paginate(15);
        } else {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->groupBy('student_clearances.id')
                ->select(
                    DB::raw('ANY_VALUE(student_enrollments.class) as class'),
                    DB::raw('ANY_VALUE(student_enrollments.school_year) as school_year'),
                    'student_clearances.id',
                    'student_clearances.student_id',
                    'student_infos.student_number',
                    'student_infos.first_name',
                    'student_infos.middle_name',
                    'student_infos.last_name',
                    'student_clearances.semester',
                    'student_clearances.status',
                    'student_clearances.remarks',
                    'student_clearances.department',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->paginate(15);
        }
        
        return view('viewallclearance', compact('remark'));
        
    }
}
