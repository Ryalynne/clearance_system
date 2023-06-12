<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_clearance extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id','semester','status','department','remarks'
    ];

    public function student(){
        return $this->belongsTo(student_info::class, 'student_id');
    }
    public function enrollment()
    {
        return $this->belongsTo(student_enrollment::class, 'id');
    }

}
