<?php

use Illuminate\Database\Seeder;

use App\Granja;

class GranjaTableSeeder extends Seeder
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
              'NomExplotacio'=>'La Granja de JOSE',
              'Usuari'=>'001',
              'Password'=>'001',  
              'email'=>'jose@gmail.com' 
            ],
            [
              'NomExplotacio'=>'Divisio ramadera del CNIN',
              'Usuari'=>'002',
              'Password'=>'002',  
              'email'=>'vagabond@gmail.com' 
            ],
            [
              'NomExplotacio'=>'Generic farm Nº74387253783',
              'Usuari'=>'003',
              'Password'=>'003',  
              'email'=>'genericFarmer@gmail.com' 
            ],
            [
              'NomExplotacio'=>'La Granja de JOSE 2, el retorno del joseador',
              'Usuari'=>'004',
              'Password'=>'004',  
              'email'=>'jose2@gmail.com' 
            ],
            
        );
        
        Granja::insert($data);
    }
}
