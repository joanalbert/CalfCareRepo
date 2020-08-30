<?php

use Illuminate\Database\Seeder;

use App\Vacuna;

class VacunaSeeder extends Seeder
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
         'Nom' => 'LeptoSpira',
         'DiesPeriode' => 182,     
         'DiesPrimeraDosi' => 91, 
        ],
        [
         'Nom' => 'BVD',
         'DiesPeriode' => 21,
         'DiesPrimeraDosi' => 76,    
        ],
        [
         'Nom' => 'IBR',
         'DiesPeriode' => 182,
         'DiesPrimeraDosi' => 121,  
        ]);
        
        Vacuna::insert($data);
    }
}
