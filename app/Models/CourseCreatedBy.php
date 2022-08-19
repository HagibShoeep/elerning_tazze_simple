<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCreatedBy extends Model
{

    use HasFactory;
    protected $table = 'course_created_bies';
    protected $fillable = ['instaititution_id','course_id'];

}
