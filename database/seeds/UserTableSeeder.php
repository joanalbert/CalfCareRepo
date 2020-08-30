<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
              'name'=>'Joan Baucells',
              'password'=>\Hash::make('123'),
              'username'=>'Basura1',  
              'email'=>'joanbaucellsnualart@gmail.com',  
              'type'=>'admin',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime  
            ],
            [
              'name'=>'Jaume Larroy',
              'password'=>\Hash::make('123'),
              'username'=>'Basura2',  
              'email'=>'jaume.larroy@gmail.com',  
              'type'=>'admin',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime   
            ],
            [
              'name'=>'JoanAlbert Francas',
              'password'=>\Hash::make('123'),
              'username'=>'Basura3',  
              'email'=>'francaslopezjoanalbert@gmail.com',  
              'type'=>'admin',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime   
            ],
            [
              'name'=>'abc',
              'password'=>\Hash::make('123'),
              'username'=>'Basura4',  
              'email'=>'abc@gmail.com',  
              'type'=>'admin',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime   
            ] 
        );
              
        User::insert($data);
    }
}
