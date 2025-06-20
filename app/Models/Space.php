<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model {
    use HasFactory;

    protected $fillable = ['project_id', 'name', 'area', 'height'];

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function works() {
        return $this->hasMany(Work::class);
    }
}
