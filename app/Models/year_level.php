<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class year_level extends Model
{
    use HasFactory;


    protected $fillable = [
        'course_id','year_level','status'
    ];

    public function course(){
        return $this->belongsTo(CourseSection::class, 'course_id');
    }
    
}
