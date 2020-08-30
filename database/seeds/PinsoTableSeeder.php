<?php

use Illuminate\Database\Seeder;
use App\Pinso;

class PinsoTableSeeder extends Seeder
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
                'Nom' => 'Purina',
                'Observacions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent orci eros, sollicitudin ornare posuere in, dapibus id lacus. Donec pretium ex ut mauris maximus suscipit. ',
                'Preu_Unitat' => 35,
                'Caracteristiques' => 'kono yaro'
            ],
            [
                'Nom' => 'Le pins segond',
                'Observacions' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent orci eros, sollicitudin ornare posuere in, dapibus id lacus. Donec pretium ex ut mauris maximus suscipit.',
                'Preu_Unitat' => 15,
                'Caracteristiques' => 'cool and good'
            ],   
            [
                'Nom' => 'Pinsos Sanki',
                'Observacions' => 'Per les groses, te nutre k te cagas, ii.... dietas',
                'Preu_Unitat' => 7,
                'Caracteristiques' => 'PROTEIN'
            ],
            [
                'Nom' => 'Can Guitarra',
                'Observacions' => 'A can guitarra kte xafa la guitarra',
                'Preu_Unitat' => 25,
                'Caracteristiques' => 'DAT GUITAR'
            ],
            [
                'Nom' => 'SAMPLE TEXT',
                'Observacions' => 'SAMPLE TEXT',
                'Preu_Unitat' => 15,
                'Caracteristiques' => 'Fusce auctor lobortis magna vehicula finibus. Suspendisse placerat, quam vel pharetra rhoncus, nibh orci ullamcorper tortor, ut ultrices orci justo sit amet lorem.'
            ],
            [
                'Nom' => 'Purina',
                'Observacions' => 'eh mu bueno',
                'Preu_Unitat' => 35,
                'Caracteristiques' => 'Lorem Ipsum'
            ],
            [
                'Nom' => 'Le pins segond',
                'Observacions' => 'eh mu bueno',
                'Preu_Unitat' => 15,
                'Caracteristiques' => 'Lorem Ipsum'
            ],   
            [
                'Nom' => 'Pinsos Sanki',
                'Observacions' => 'Per les groses, te nutre k te cagas, ii.... dietas',
                'Preu_Unitat' => 7,
                'Caracteristiques' => 'PROTEIN'
            ],
            [
                'Nom' => 'Can Guitarra',
                'Observacions' => 'A can guitarra kte xafa la guitarra',
                'Preu_Unitat' => 25,
                'Caracteristiques' => 'DAT GUITAR'
            ],
            [
                'Nom' => 'SAMPLE TEXT',
                'Observacions' => 'SAMPLE TEXT',
                'Preu_Unitat' => 15,
                'Caracteristiques' => 'SAMPLE TEXT'
            ],
        );
        
        Pinso::insert($data);
    }
}
