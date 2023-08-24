<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headhunter extends Model
{
    use HasFactory;

    public function comentaries(){
        return $this->belongsToMany(Commentary::class);
    }
}