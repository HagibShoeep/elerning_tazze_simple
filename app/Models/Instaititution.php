<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instaititution extends Model
{
    use HasFactory;
    protected $table = 'instaititutions';
    protected $fillable = ['Name','location'];

}
