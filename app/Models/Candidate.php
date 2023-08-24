<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function commentaries(){
        return $this->belongsToMany(Commentary::class);
    }

    public function multimedias(){
        return $this->belongsToMany(Multimedia::class);
    }
}
