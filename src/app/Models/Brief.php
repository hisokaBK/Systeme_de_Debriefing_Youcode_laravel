<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brief extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'duree_estimee',
        'type',
        'sprint_id',
    ];

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }

    public function competences()
    {
        return $this->belongsToMany(
            Competence::class,
            'brief_competence'
        );
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
