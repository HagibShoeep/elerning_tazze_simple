<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolledSpecialization extends Model
{
    use HasFactory;
    protected $table = 'enrolled_specializations';
    protected $fillable = ['student_id','specialization_session_id','statuses_id','cirtifcate_id','cirtifcate_location'];

}
