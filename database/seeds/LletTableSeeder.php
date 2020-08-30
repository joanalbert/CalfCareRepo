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
                'Tipus' => 'Pols',
                'Preu_Unitat' => 30.34
            ],
            [
                'Nom' => 'JOSE',
                'Tipus' => 'Liquid',
                'Preu_Unitat' => 573
            ],
            [
                'Nom' => 'Omega',
                'Tipus' => 'Pols',
                'Preu_Unitat' => 80
            ],          
        );
        
        Llet::insert($data);
    }
}
