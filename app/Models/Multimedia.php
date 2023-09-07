<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;

    public function commentaries(){
        return $this->hasMany(Commentary::class);
    }

    public function candidates(){
        return $this->hasMany(Candidate::class);
    }
}
