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

      
       $this->call(CategoriasSeeder::class);
       $this->call(MarcasSeeder::class);
       $this->call(RoleSeeder::class);
    // $this->call(UserSeeder::class);
       $this->call(ProductoSeeder::class);
       $this->call(CaracteristicasSeeder::class);
       
      
      
    }
}
