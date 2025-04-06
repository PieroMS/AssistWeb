<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'lastname',
        'document_type',
        'document_number',
        'employment_date',
        'email',
        'password',
        'phone',
        'rol_id',
        'companie_id',
        'department_id',
        'job_id',
        'schedule_id',
        'status',
        'qr_code',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relaciones

    public function rols()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'user_id'); //No es necesario declarar a user_id
    }

    public function extrahours()
    {
        return $this->hasMany(Extrahour::class, 'user_id');
    }

    public function assists()
    {
        return $this->hasMany(Assist::class, 'user_id');
    }

    public function companies()
    {
        return $this->belongsTo(Companie::class, 'companie_id');
    }

    public function jobs()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function schedules()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }

}
