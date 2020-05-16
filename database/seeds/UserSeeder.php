<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     

    User::create([
        'rol_id'=>'1',
        'name'=>'nicolas',
        'foto_perfil'=>'img_1',
        'apellido'=>'fernandez',
        'email'=>'nicolas.pr@gmail.com',
        'password'=>'12345678'
    ]);
    
    User::create([
        'rol_id'=>'2',
        'name'=>'mauro',
        'foto_perfil'=>'img_2',
        'apellido'=>'saraza',
        'email'=>'mauro.pr@gmail.com',
        'password'=>'12345678'
    ]);
    User::create([
        'rol_id'=>'2',
        'name'=>'Hugo',
        'foto_perfil'=>'img_3',
        'apellido'=>'ramirwz',
        'email'=>'ramirezhugo.pr@gmail.com',
        'password'=>'12345678'
    ]);
    User::create([
        'rol_id'=>'2',
        'name'=>'noelia',
        'foto_perfil'=>'img_4',
        'apellido'=>'diaz',
        'email'=>'noelia@gmail.com',
        'password'=>'12345678'
    ]);
        }
}
