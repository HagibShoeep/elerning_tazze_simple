<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpitializationCreatedBy extends Model
{
    use HasFactory;
    protected $table = 'spitialization_created_bies';
    protected $fillable = ['instaititution_id','course_id'];

}
