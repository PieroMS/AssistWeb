<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // Relaciones
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function companies()
    {
        return $this->belongsTo(Companie::class, 'company_id');
    }
}
