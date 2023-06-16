<?php

namespace App\Http\Controllers;

use App\Models\student_clearance;
use App\Models\student_enrollment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myPDFController extends Controller
{
    public function generatePDF($year, $section, $semester)
    {
        $department = auth()->user()->department;
        $clearance = student_clearance::where('department', $department)
            ->where('status', 0)
            ->whereYear('created_at', '=', $year)
            ->where('semester', $semester)
            ->get();

        $pdf = PDF::loadView('MyPDFclearance', compact('clearance', 'year', 'section'));
        return $pdf->setPaper('612.00,1008.00', 'portrait')->stream('clearance_' . $year . '.pdf');
    }

    public function generateremark($year, $class, $section, $semester)
    {
        if ($class != "all" && $section != "all" && $semester != "all") {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.semester', $semester)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_enrollments.school_year', $year)
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
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->get();
        } else if ($class != "all" && $section != "all" && $semester == "all") {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_enrollments.school_year', $year)
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
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->get();
        } else if ($class != "all" && $section == "all" && $semester == "all") {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_enrollments.school_year', $year)
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
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->get();
        } else if ($class != "all" && $section == "all" && $semester != "all") {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.semester', $semester)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_enrollments.class', 'LIKE', '%' . $class . '%')
                ->where('student_enrollments.school_year', $year)
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
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->get();
        }
        else if ($class == "all" && $section != "all" && $semester != "all") {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_enrollments.class', 'LIKE', '%' . $class . '%')
                ->where('student_enrollments.school_year', $year)
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
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->get();
        }else if ($class == "all" && $section == "all" && $semester != "all") {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_clearances.semester', $semester)
                ->where('student_enrollments.school_year', $year)
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
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->get();
        }  
        
        else {
            $remarks = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 1)
                ->where('student_clearances.department', auth()->user()->department)
                ->where('student_enrollments.school_year', $year)
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
                    'student_clearances.department',
                    'student_clearances.remarks',
                    'student_clearances.doneremarks',
                    'student_clearances.created_at',
                    'student_clearances.updated_at'
                )
                ->get();
        }
        $pdf = PDF::loadView('MyPDFremark', compact('remarks'));
        return $pdf->setPaper('612.00,1008.00', 'portrait')->stream('clearance_' . $year . '.pdf');
    }

    public function generatePDFAdmin($year, $year1, $class, $section, $semester, $department)
    {

        if ($class == "all" && $section == "all" && $department == "all" && $semester == "all") {
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
                ->get();
        } else if ($class == "all" && $section != "all" && $department == "all" && $semester == "all") {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->where('student_enrollments.class', 'LIKE', '%' . $section . '%')
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
                ->get();
        } else if ($class != "all" && $section != "all" && $department != "all" && $semester == "all") {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->where('student_enrollments.class', $class . '-' . $section)
                ->where('student_clearances.department', $department)
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
                ->get();
        } else if ($class != "all" && $section == "all" && $department != "all" && $semester != "all") {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->where('student_enrollments.class', 'LIKE', '%' . $class . '%')
                ->where('student_clearances.department', $department)
                ->where('student_clearances.semester', $semester)
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
                ->get();
        } else if ($class != "all" && $section == "all" &&  $semester == "all" && $department != "all") {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->where('student_enrollments.class', 'LIKE', '%' . $class . '%')
                ->where('student_clearances.department', $department)
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
                ->get();
        } else if ($class != "all" && $section == "all" && $department == "all" && $semester == "all") {
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
                ->get();
        } else if ($class != "all" && $section != "all" && $department == "all" && $semester == "all") {
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
                ->get();
        } else if ($class == "all" && $section == "all" && $department != "all" && $semester != "all") {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->where('student_clearances.department', $department)
                ->where('student_clearances.semester', $semester)
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
                ->get();
        } else if ($class == "all" && $section == "all" && $department == "all" && $semester != "all") {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->where('student_clearances.semester', $semester)
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
                ->get();
        } else if ($class == "all" && $section == "all" && $semester == "all" && $department != "all") {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->where('student_clearances.department', $department)
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
                ->get();
        } else if ($class == "all" && $section != "all" && $semester != "all" && $department != "all") {
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
                ->get();
        } else if ($class != "all" && $section != "all" && $semester != "all" && $department != "all") {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->where('student_clearances.department', $department)
                ->where('student_enrollments.class', $class . '-' . $section)
                ->where('student_clearances.semester', $semester)
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
                ->get();
        } else {
            $remark = DB::table('student_clearances')
                ->join('student_enrollments', 'student_enrollments.student_id', '=', 'student_clearances.student_id')
                ->join('student_infos', 'student_infos.id', '=', 'student_clearances.student_id')
                ->where('student_clearances.status', 0)
                ->whereBetween('student_enrollments.school_year', [$year, $year1])
                ->where('student_clearances.semester', $semester)
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
                ->get();
        }

        $pdf = PDF::loadView('MyPDFadmin', compact('remark'));
        return $pdf->setPaper('612.00,1008.00', 'portrait')->stream('clearance_' . $year . '_' . $year1 . '.pdf');
    }
}
