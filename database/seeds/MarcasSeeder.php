<?php

use Illuminate\Database\Seeder;
use App\Marca;
class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $marcas=array(
            "Samsung","Motorola","Huawei","Xiaomi","Oppo","LG","Sony","Alcatel","Apple","nokia","lenovo"
        );
        for ($i=0; $i < count($marcas); $i++) {
            Marca::create([
                'nombre' => $marcas[$i]
            ]);
        }

    }
}
