<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'Course_label', 'Course_name', 'Designated_name','status'
    ];

    public function countStudents()
{
    $currentYear = Carbon::now()->format('Y');
    $studentCount = student_enrollment::where('class', 'like', '%' . $this->Course_name . '%')
        ->where('school_year', $currentYear)
        ->count();

    return $studentCount;
}
}
