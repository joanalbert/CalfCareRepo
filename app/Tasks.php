<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = "tasques";
    
    protected $fillable = [
        "acabada",
        "Observacions",
        "DataInici",
        "DataFi",
    ];
}
