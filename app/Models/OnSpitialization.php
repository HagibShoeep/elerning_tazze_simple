<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnSpitialization extends Model
{
    use HasFactory;
    protected $table = 'on_spitializations';
    protected $fillable = ['lecturer_id','course_id'];

}
