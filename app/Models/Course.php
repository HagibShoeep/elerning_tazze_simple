<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    //SpitializationCreatedBy
    public function spitializationCreatedBy() {
        return $this->belongsTo(App\Models\SpitializationCreatedBy::class, 'foreign_key', 'local_key');
    }

    //CourseCreatedBy
    public function courseCreatedBy() {
        return $this->belongsTo(App\Models\CourseCreatedBy::class, 'foreign_key', 'local_key');
    }
    public function courseSission() {
        return $this->belongsTo(App\Models\CourseSession::class, 'foreign_key', 'local_key');
    }
    protected $table = 'courses';
    protected $fillable = ['name','commetment','description','min_grade','course_price','active'];

}
