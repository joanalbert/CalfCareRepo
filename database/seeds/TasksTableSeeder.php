<?php

use Illuminate\Database\Seeder;
use App\Tasks;

class TasksTableSeeder extends Seeder
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
                "acabada" => "NO",
                "Observacions" => "LA COMIDA",
                "DataInici" => date('Y-m-d', strtotime('2021/1/17')),
                "DataFi" => date('Y-m-d', strtotime('2021/1/19')),
            ],
            [
                "acabada" => "NO",
                "Observacions" => "LA SED",
                "DataInici" => date('Y-m-d', strtotime('2021/1/11')),
                "DataFi" => date('Y-m-d', strtotime('2021/1/12')),
            ],
            [
                "acabada" => "NO",
                "Observacions" => "COJONES JA",
                "DataInici" => date('Y-m-d', strtotime('2021/1/13')),
                "DataFi" => date('Y-m-d', strtotime('2021/1/17')),
            ]
        );
        
        Tasks::insert($data);
    }
}
