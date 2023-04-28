<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OffresEmploi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'tache_id', 
        'poste_id', 
        'offre_nombreAnnee', 
        'offre_datePublication',
        'offre_debutMandat', 
        'offre_horaire', 
        'offre_langue', 
        'offre_infoSup'
    ];
}
