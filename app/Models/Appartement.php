<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'nb_piece',
        'localisation',
        'etage',
        'prix',
        'surface',
        'description',
        'status',
        'adresse',
    ];
}
