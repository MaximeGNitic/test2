<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheClients extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id', 
        'client_nom',
        'client_adresse',
        'client_telephone',
        'client_email'
    ];
}
