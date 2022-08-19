<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpitializationDetails extends Model
{
    use HasFactory;
    protected $table = 'spitialization_details';
    protected $fillable = ['name','description','spitialization_desition','active'];

}
