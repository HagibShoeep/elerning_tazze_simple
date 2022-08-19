<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnCourse extends Model
{
    use HasFactory;
    protected $table = 'on_courses';
    protected $fillable = ['lecturer_id','course_id'];

}
