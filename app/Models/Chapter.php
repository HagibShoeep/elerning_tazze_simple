<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $table = 'chapters';
    protected $fillable = ['description','chapter_no'];
    public function material() {
        return $this->belongsTo(App\Models\Material::class, 'foreign_key', 'local_key');
    }
}
