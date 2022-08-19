<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolledCurse extends Model
{
    use HasFactory;
    protected $table = 'enrolled_curses';
    protected $fillable = ['student_id','course_session_id','statuses_id','status_date'];
}
