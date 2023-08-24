<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    use HasFactory;

    public function headhunters(){
        return $this->belongsTo(Headhunter::class);
    }

    public function candidates(){
        return $this->belongsTo(Candidate::class);
    }

    public function Multimedias(){
        return $this->belongsTo(Multimedia::class);
    }
}
