<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnCourse extends Model
{
    use HasFactory;
    protected $table = 'on_courses';
    protected $fillable = ['lecturer_id','course_id'];

    public function course() {
        return $this->hasMany(App\Model\Course::class,'foreign_key', 'local_key');
    }
}
