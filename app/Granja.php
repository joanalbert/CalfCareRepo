<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Granja extends Model
{
    
    protected $table = "granja";
    
    protected $fillable = ['NomExplotacio', 'Usuari', 'Password', 'email'];
    
    
}
