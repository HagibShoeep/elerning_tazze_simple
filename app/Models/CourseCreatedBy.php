<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCreatedBy extends Model
{

    use HasFactory;
    protected $table = 'course_created_bies';
    protected $fillable = ['instaititution_id','course_id'];
    public function instaititution() {
        return $this->hasMany(App\Model\Instaititution::class, 'foreign_key', 'local_key');
    }
    public function course() {
        return $this->hasMany(App\Model\Course::class,'foreign_key', 'local_key');
    }
}
