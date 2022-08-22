<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResulte extends Model
{
    use HasFactory;
    protected $table = 'student_resultes';
    protected $fillable = ['student_id','material_id','itempt','itempt_link','score'];
    public function student() {
        return $this->hasMany(App\Model\Student::class,'foreign_key', 'local_key');
    }
    public function material() {
        return $this->hasMany(App\Model\Material::class,'foreign_key', 'local_key');
    }
}
