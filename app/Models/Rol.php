<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    // Relaciones
    
    public function users()
    {
        return $this->hasMany(User::class); //No es necesario declarar a user_id
    }
}
