<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $table = 'materials';
    protected $fillable = ['chapter_id','material_type_id','mondetrery','maxpoints','materialLink'];

    public function chapter() {
        return $this->hasMany(App\Model\Chapter::class,'foreign_key', 'local_key');
    }
    public function materialType() {
        return $this->hasMany(App\Model\MaterialType::class,'foreign_key', 'local_key');
    }
}
