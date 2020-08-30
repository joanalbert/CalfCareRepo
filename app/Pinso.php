<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinso extends Model
{
    protected $table = "pinso";
    
    protected $fillable = [
        'Nom',
        'Observacions',
        'Preu_Unitat',
        'Caracteristiques'
    ];
}
