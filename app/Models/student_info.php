<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_info extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'student_number', 'first_name', 'last_name', 'middle_name'
    ];
    
    public function enrollment()
    {
        return $this->belongsTo(student_enrollment::class, 'id');
    }

    public function student(){
        return $this->belongsTo(student_info::class, 'student_id');
    }
    
}
