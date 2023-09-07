<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    use HasFactory;

    public function headhunter(){
        return $this->belongsTo(Headhunter::class);
    }

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }

    public function multimedia(){
        return $this->belongsTo(Multimedia::class);
    }
}
