<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    protected $table = "vacunes";

    protected $fillable = [
        'Nom',
        'DiesPeriode',
        'DiesPrimeraDosi',
    ];
}
