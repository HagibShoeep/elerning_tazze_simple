<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecializationSession extends Model
{
    use HasFactory;
    protected $table = 'specialization_sessions';
    protected $fillable = ['name','detail','specialization_id'];

}
