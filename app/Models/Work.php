<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model {
    use HasFactory;

    protected $fillable = ['space_id', 'material_id', 'type', 'surface'];

    public function space() {
        return $this->belongsTo(Space::class);
    }

    public function material() {
        return $this->belongsTo(Material::class);
    }
}
