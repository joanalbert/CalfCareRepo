<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(GranjaTableSeeder::class);
        $this->call(AnimalTableSeeder::class);
        $this->call(LletTableSeeder::class);
        $this->call(PinsoTableSeeder::class);
        $this->call(VacunaSeeder::class);
        $this->call(TasksTableSeeder::class);
    }
}
