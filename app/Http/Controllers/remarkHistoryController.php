<?php

namespace App\Http\Controllers;

use App\Models\student_clearance;
use App\Models\student_enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class remarkHistoryController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->input('year');
        $class = $request->input('class');
        $section = $request->input('section');
        if ($class != "" && $section != "") {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_enrollments.school_year', $year)
                ->where('student_enrollments.class',  $class . '-' . $section)
                ->groupBy('student_clearances.id')
                ->select(
                    'student_clearances.id',
                    'student_clearances.student_id',
                    'student_clearances.semester',
                    'student_clearances.status',
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->paginate(15);
        } else if ($class) {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_enrollments.school_year', $year)
                ->where('student_enrollments.class',   'LIKE', '%' . $class . '%')
                ->groupBy('student_clearances.id')
                ->select(
                    'student_clearances.id',
                    'student_clearances.student_id',
                    'student_clearances.semester',
                    'student_clearances.status',
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->paginate(15);
        } else {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_enrollments.school_year', $year)
                ->groupBy('student_clearances.id')
                ->select(
                    'student_clearances.id',
                    'student_clearances.student_id',
                    'student_clearances.semester',
                    'student_clearances.status',
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->paginate(15);
        }
        return view('remarkhistory', compact('remarks'));
    }
}
