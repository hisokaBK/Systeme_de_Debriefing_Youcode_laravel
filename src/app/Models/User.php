<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'role',
        'actif',
        'classe_id',
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
            'actif' => 'boolean',
        ];
    }

    // Apprenant -> classe
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    // Teacher -> classes
    public function classesTaught()
    {
        return $this->belongsToMany(
            Classe::class,
            'classe_teacher',
            'teacher_id',
            'classe_id'
        );
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
