<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   use HasFactory;

    //Relaciones

    public function companies()
    {
        return $this->belongsTo(Companie::class, 'companie_id');
    }
}
