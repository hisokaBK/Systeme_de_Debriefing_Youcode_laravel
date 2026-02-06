<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'teacher_id',
        'brief_id',
        'competence_id',
        'skill_level',
        'commentaire',
        'status',
    ];

    public function apprenant()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function brief()
    {
        return $this->belongsTo(Brief::class);
    }

    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }
}
