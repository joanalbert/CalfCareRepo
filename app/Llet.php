<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llet extends Model
{
    protected $table = "llet";
    
    protected $fillable = [
        'Nom',
        'Tipus',
        'Quantitat',
        'Unitat',
        'Preu_Unitat'
    ];
}
