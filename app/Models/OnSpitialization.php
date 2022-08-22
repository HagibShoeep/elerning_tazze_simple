<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnSpitialization extends Model
{
    use HasFactory;
    protected $table = 'on_spitializations';
    protected $fillable = ['lecturer_id','course_id'];

    public function course() {
        return $this->hasMany(App\Model\Course::class,'foreign_key', 'local_key');
    }
    public function lecturers() {
        return $this->hasMany(App\Model\Lecturer::class,'foreign_key', 'local_key');
    }
}
