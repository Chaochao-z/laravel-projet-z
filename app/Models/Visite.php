<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_appartement',
        'date_visite',
    ];

    public function appartements(){
        return $this->belongsToMany(Appartement::class , 'id_appartement');
    }
}
