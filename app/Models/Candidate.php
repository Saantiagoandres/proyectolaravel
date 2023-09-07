<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function commentaries(){
        return $this->hasMany(Commentary::class);
    }

    public function multimedias(){
        return $this->hasMany(Multimedia::class);
    }
}
