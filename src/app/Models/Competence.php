<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competence extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'libelle',
        'niveau',
    ];

    public function briefs()
    {
        return $this->belongsToMany(
            Brief::class,
            'brief_competence'
        );
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
