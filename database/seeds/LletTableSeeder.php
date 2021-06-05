<?php

use Illuminate\Database\Seeder;
use App\Llet;

class LletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        $data = array(
            [
                'Nom' => 'Pascual',
                'Tipus' => 'En pols',
                'Preu_Unitat' => 30.34,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ],
            [
                'Nom' => 'JOSE',
                'Tipus' => 'Liquida',
                'Preu_Unitat' => 573,
                'Unitat' => "L",
                'Quantitat' => 1000
            ],
            [
                'Nom' => 'Omega',
                'Tipus' => 'Calvoros',
                'Preu_Unitat' => 80,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ],   
            [
                'Nom' => 'Shite',
                'Tipus' => 'En pols',
                'Preu_Unitat' => 30,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ],   
            [
                'Nom' => 'Hombre',
                'Tipus' => 'En pols',
                'Preu_Unitat' => 10,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ],   
            [
                'Nom' => 'Poronga',
                'Tipus' => 'En pols',
                'Preu_Unitat' => 20,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ],   
            [
                'Nom' => 'Victor',
                'Tipus' => 'En pols',
                'Preu_Unitat' => 60,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ],   
            [
                'Nom' => 'Donoctor',
                'Tipus' => 'En pols',
                'Preu_Unitat' => 180,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ], 
            [
                'Nom' => 'Xungo',
                'Tipus' => 'En pols',
                'Preu_Unitat' => 80,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ], 
            [
                'Nom' => 'Pendejo',
                'Tipus' => 'En pols',
                'Preu_Unitat' => 80,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ],   
            [
                'Nom' => 'Boludo',
                'Tipus' => 'En pols',
                'Preu_Unitat' => 80,
                'Unitat' => "KG",
                'Quantitat' => 1000
            ],   
        );
        
        Llet::insert($data);
    }
}
