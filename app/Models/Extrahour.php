<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extrahour extends Model
{
    use HasFactory;

    // Relaciones

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
