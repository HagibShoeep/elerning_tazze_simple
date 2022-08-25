<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    use HasFactory;
    protected $table = 'material_types';
    protected $fillable = ['type_name'];

    public function material() {
        return $this->belongsTo(App\Models\Material::class, 'foreign_key', 'local_key');
    }
}
