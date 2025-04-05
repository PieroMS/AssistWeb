<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;

    // Relaciones

    public function users()
    {
        return $this->hasMany(User::class); //No es necesario declarar a user_id
    }

    public function jobs()
    {
        return $this->hasMany(Job::class); //No es necesario declarar a user_id
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class); //No es necesario declarar a user_id
    }

    public function departments()
    {
        return $this->hasMany(Department::class); //No es necesario declarar a user_id
    }
}
