<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolledCurse extends Model
{
    use HasFactory;
    protected $table = 'enrolled_curses';
    protected $fillable = ['student_id','course_session_id','statuses_id','status_date'];
    public function status() {
        return $this->hasMany(App\Model\Status::class,'foreign_key', 'local_key');
    }
    public function courseSession() {
        return $this->hasMany(App\Model\CourseSession::class,'foreign_key', 'local_key');
    }
    public function students() {
        return $this->hasMany(App\Model\Student::class,'foreign_key', 'local_key');
    }
}
