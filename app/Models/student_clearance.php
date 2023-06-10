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
    
}
