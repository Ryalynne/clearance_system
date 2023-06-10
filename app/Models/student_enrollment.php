<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_enrollment extends Model
{
    use HasFactory;
  
    protected $fillable= [
        'student_id','school_year','semester','class'
    ];

    public function student()
    {
        return $this->belongsTo(student_info::class, 'student_id');
    }

    public function test($semester, $student_id)
    {
        return student_clearance::where('department', auth()->user()->department)
            ->where('student_id', $student_id)
            ->where('semester', $semester)
            ->where('status', 0)
            ->value('id');
    }

    public function remarktest($semester, $student_id){
        return student_clearance::where('department', auth()->user()->department)
            ->where('student_id', $student_id)
            ->where('semester', $semester)
            ->where('status', 0)
            ->value('remarks');
    }

    public function remark($semester, $student_id)
    {
        return student_clearance::where('department', 'library')
            ->where('student_id', $student_id)
            ->where('semester', $semester)
            ->where('status', 0)
            ->value('remarks');
    }

    public function remark1($semester, $student_id)
    {
        return student_clearance::where('department', 'guidance')
            ->where('student_id', $student_id)
            ->where('semester', $semester)
            ->where('status', 0)
            ->value('remarks');
    }

    public function remark2($semester, $student_id)
    {
        return student_clearance::where('department', 'alumni')
            ->where('student_id', $student_id)
            ->where('semester', $semester)
            ->where('status', 0)
            ->value('remarks');
    }

    public function remark3($semester, $student_id)
    {
        return student_clearance::where('department', 'prefect')
            ->where('student_id', $student_id)
            ->where('semester', $semester)
            ->where('status', 0)
            ->value('remarks');
    }

    public function remark4($semester, $student_id)
    {
        return student_clearance::where('department', 'accounting')
            ->where('student_id', $student_id)
            ->where('semester', $semester)
            ->where('status', 0)
            ->value('remarks');
    }

    public function remark5($semester, $student_id)
    {
        return student_clearance::where('department', 'registar')
            ->where('student_id', $student_id)
            ->where('semester', $semester)
            ->where('status', 0)
            ->value('remarks');
    }

    public function remark6($semester, $student_id)
    {
        return student_clearance::where('department', 'dean')
            ->where('student_id', $student_id)
            ->where('semester', $semester)
            ->where('status', 0)
            ->value('remarks');
    }
}
