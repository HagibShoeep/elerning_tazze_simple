<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSession extends Model
{
    use HasFactory;
    protected $table = 'course_sessions';
    protected $fillable = ['start_at','end_at','course_id','specialization_session_id','final_grade','cirtifcate_id','cirtifcate_location'];
    public function course() {
        return $this->hasMany(App\Model\Course::class,'foreign_key', 'local_key');
    }
}
