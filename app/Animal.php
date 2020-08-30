<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = "animal";
    
    protected $fillable = [
        'ID_GRANJA',
        'N_Explotacio',
        'N_DARP',
        'Data_Naixement',
        'Data_Mort',
        'Data_Deslletament',
        'Data_Cremada_Banyes',
        'Metode_Cremada',
        'Contorn_Centimetres',
        'Litres_Calostra',
        'Preses_Calostra',
        'sexe',
        'Perimetre_Torax',
        'Ruta_Imatge',
        'Pes_Actual'
    ];
}
