<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sprint extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date_debut',
        'date_fin',
        'ordre',
        'status',
        'classe_id',
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function briefs()
    {
        return $this->hasMany(Brief::class);
    }
}
