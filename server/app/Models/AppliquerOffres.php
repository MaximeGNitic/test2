<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliquerOffres extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'offre_id', 
        'cand_id',
        'appOffre_dateAppliquer',
        'appOffre_dispo',
        'appOffre_status'
    ];
}
