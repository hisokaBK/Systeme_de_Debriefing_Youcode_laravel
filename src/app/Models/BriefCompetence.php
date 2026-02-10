<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BriefCompetence extends Model
{
    use HasFactory;

    protected $table = 'brief_competence';

    protected $fillable = [
        'brief_id',
        'competence_id',
    ];

    public $timestamps = false;

    public function brief()
    {
        return $this->belongsTo(Brief::class);
    }

    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }
}
