<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    use HasFactory;

    protected $table = 'course_details';
    protected $fillable = ['name','commetment','spitialization_id','description','min_grade','course_price','active'];

}

