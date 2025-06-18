<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model {
    use HasFactory;

    protected $fillable = ['name', 'unit', 'price_per_unit', 'default_consumption'];

    public function works() {
        return $this->hasMany(Work::class);
    }
}
