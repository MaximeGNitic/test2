<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id', 
        'cand_id',
        'exp_titre',
        'exp_nomEntreprise',
        'exp_dateDebut',
        'exp_dateFin',
        'exp_description'
    ];
}
