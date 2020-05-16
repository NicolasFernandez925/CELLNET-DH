<?php

use Illuminate\Database\Seeder;
use App\Caracteristica;


class CaracteristicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caracteristica::create([
            //Moto z play 1
            'producto_id' => 1,
            'display' => '6,01 SuperAMOLED FullHD+ 18:9, 79% Gorilla Glass 3, 2.5D',
            'procesador' => 'Snapdragon 636',
            'memoria' => '32 / 64 GB',
            'memoria_ram' => '4GB',
            'camara' => '12+5MP, f/1.7, PDAF, 1.4um, dualflashLED, vídeo 4K',
            'camara_secundaria' => 'Frontal: 8MP, f/2.0',
            'sistema_operativo' => 'Android 8.1 Oreo',
            'bateria' => '3.000 mAh + carga rápida'
           
        ]);

        Caracteristica::create([
            //lg k9 2
            'producto_id' => 2,
            'display' => "Pantalla: 5, 720 x 1280 pixels ",
            'procesador' => "Snapdragon 210 1.3GHz",
            'memoria' => "16GB/32GB",
            'memoria_ram' => "2GB",
            'camara' => "8 MP",
            'camara_secundaria' => "Frontal: 8MP, f/2.0",
            'sistema_operativo' => "Android 7.1.2",
            'bateria' => " 2500 mAh"
        ]);

        Caracteristica::create([
            //iphone xs max 3
            'producto_id' => 3,
            'display' => "OLED 6,5 3D Touch, HDR10",
            'procesador' => "Apple A12 Bionic 7nm, 64 bit a 2,5GHz",
            'memoria' => "64/256 GB / 512GB",
            'memoria_ram' => "4GB",
            'camara' => "Angular: 12 MP f/1.8 Telefoto: 12 MP f/2.4 OIS, PDAF, flash LED cuádruple, modo retrato, vídeo 4K",
            'camara_secundaria' => "7 MP, f / 2.2, HDR, modo retrato",
            'sistema_operativo' => "iOS 12",
            'bateria' => "Carga rápida + inalámbrica Qi"
        ]);
        Caracteristica::create([
            //Apple iPhone XR 4
            'producto_id' => 4,
            'display' => "6.1 pulgadas (LCD - Liquid Retina)",
            'procesador' => "Apple A12 Bionic",
            'memoria' => "256GB",
            'memoria_ram' => "3GB ",
            'camara' => "12 megapixeles con apertura f/1.8",
            'camara_secundaria' => "Sistema True Depth frontal con sensor de 7 megapixeles",
            'sistema_operativo' => "iOS 12",
            'bateria' => " 3000 mAh"
        ]);
        Caracteristica::create([
            //Moto g7 play 5
            'producto_id' => 5,
            'display' => "5.7 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM632 Snapdragon 632 octa-core 1.8GHz",
            'memoria' => "32GB",
            'memoria_ram' => "2GB ",
            'camara' => "13 MP",
            'camara_secundaria' => "8 MP, f/2.2, flash LED, 1080p, HDR",
            'sistema_operativo' => "Android 9.0",
            'bateria' => " 3000 mAh"
        ]);

        Caracteristica::create([
            //Moto g7 PLUS 6
            'producto_id' => 6,
            'display' => "6.2 pulgadas, 19:9, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM636 Snapdragon 636 octa-core 1.8GHz",
            'memoria' => "64GB almacenamiento interno",
            'memoria_ram' => "4GB RAM ",
            'camara' => "Dual, 16 MP (f/1.7, PDAF, OIS) + 5 MP (f/2.2, profundidad)",
            'camara_secundaria' => "12 MP, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => " 3000 mAh"
        ]);

        Caracteristica::create([
            // Motorola Moto E E5 Play 7
            'producto_id' => 7,
            'display' => "5.2 pulgadas, 16:9, 19:9, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM636 Snapdragon 636 octa-core 1.8GHz",
            'memoria' => "16GB almacenamiento interno",
            'memoria_ram' => "2GB RAM",
            'camara' => "8MP, f/2.0",
            'camara_secundaria' => "5 MP, flash LED",
            'sistema_operativo' => "Android 8.0 Oreo",
            'bateria' => "2800 mAh"
        ]);

        Caracteristica::create([
            // Samsung Galaxy A70 (edicion limitada) 128 GB Blanco 6 GB RAM
            'producto_id' => 8,
            'display' => "6.7 pulgadas,Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM675 Snapdragon 675 octa-core 2GHz",
            'memoria' => "128GB almacenamiento interno",
            'memoria_ram' => "6GB",
            'camara' => "Triple, 32 MP (f/1.7, PDAF) + 5 MP (f/2.2, profundidad) + 8 MP (f/2.2, ultra wide)",
            'camara_secundaria' => "32 MP, f/2.0, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4500 mAh"
        ]);

        Caracteristica::create([
            // Samsung Galaxy Note10+ 
            'producto_id' => 9,
            'display' => "6.8 pulgadas, 19:9,Dynamic AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Exynos 9825 octa-core 2.73GHz / Qualcomm SDM855 Snapdragon 855 Plus 2.96GHz",
            'memoria' => "128GB almacenamiento interno",
            'memoria_ram' => "6GB",
            'camara' => "Cuádruple, 12 MP (Dual Pixel) + 12 MP + 16 MP (f/2.2)",
            'camara_secundaria' => "10 MP ( f/2.2, PDAF Dual Pixel), HDR, 1440p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4300 mAh"
        ]);

        Caracteristica::create([
            // Samsung Galaxy A50
            'producto_id' => 10,
            'display' => "6.4 pulgadas, Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Exynos 9610 octa-core 2.3GHz",
            'memoria' => "64GB almacenamiento interno",
            'memoria_ram' => "4GB RAM",
            'camara' => "Triple, 25 MP (f/1.7) + 5 MP (f/2.2) + 8 MP (f/2.2)",
            'camara_secundaria' => "25 MP, f/2.0, 1080p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4000 mAh"
        ]);
        Caracteristica::create([
            // Samsung Galaxy A30s
            'producto_id' => 11,
            'display' => "6.4 pulgadas, Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Exynos 7885 octa-core 1.8GHz",
            'memoria' => "64GB almacenamiento interno",
            'memoria_ram' => "4GB RAM",
            'camara' => "Triple, 25 MP (f/1.7, PDAF) + 8 MP (f/2.2, ultrawide) + 5 MP (f/2.2, profundidad)",
            'camara_secundaria' => "16 MP, f/2.0, 1080p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4000 mAh"
        ]);

        Caracteristica::create([
            // Apple iPhone 11 Pro Max
            'producto_id' => 12,
            'display' => "6.5 pulgadas, OLED touchscreen capacitivo, 16M colores",
            'procesador' => "Apple A13 Bionic hexa-core 2.65Ghz",
            'memoria' => "256GB almacenamiento interno",
            'memoria_ram' => "4GB RAM",
            'camara' => "Triple, 12 MP (f1/.8, PDAF, OIS, wide) + 12 MP (f/2.4, ultrawide) + 12 MP (f/2.0, PDAF, OIS, telefoto)",
            'camara_secundaria' => "12 MP, f/2.2, flash Retina, 2160p@24/30/60fps, 1080p@30/60/120fps, HDR",
            'sistema_operativo' => "iOS 13",
            'bateria' => "3969 mAh"
        ]);

        Caracteristica::create([
            //  Samsung A 20s 
            'producto_id' => 13,
            'display' => "6.4 pulgadas, Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Exynos 7884 octa-core 1.6GHz",
            'memoria' => "32GB almacenamiento interno",
            'memoria_ram' => "3GB RAM",
            'camara' => "Dual, 13 MP (f/1.9, wide) + 5 MP (f/2.2, profundidad)",
            'camara_secundaria' => "8 MP, f/2.0, 1080p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4000 mAh"
        ]);

        Caracteristica::create([
            // Samsung Galaxy A 51
            'producto_id' => 14,
            'display' => "6.5 pulgadas, Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Exynos 9611 octa-core 2.3GHz",
            'memoria' => "128GB",
            'memoria_ram' => "6GB RAM",
            'camara' => "Cuádruple, 48 MP (f/2.0, PDAF, wide) + 12 MP (f/2.2, ultrawide) + 5 MP (f/2.4, macro) + 5 MP (f/2.2, profundidad)",
            'camara_secundaria' => "32 MP, f/2.2, wide, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4000 mAh"
        ]);

        Caracteristica::create([
            // Motorola Moto  E6 Play
            'producto_id' => 15,
            'display' => "5.5 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Mediatek MT6739 quad-core 1.5GHz",
            'memoria' => "32GB",
            'memoria_ram' => "2GB RAM",
            'camara' => "13 MP, f/2.2, PDAF",
            'camara_secundaria' => "5 MP, f/2.2, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "3000 mAh"
        ]);

        Caracteristica::create([
            // Samsung Galaxy A7 (2018)
            'producto_id' => 16,
            'display' => "6.0 pulgadas, Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Mediatek MT6739 quad-core 1.5GHz",
            'memoria' => "64GB almacenamiento interno",
            'memoria_ram' => "4GB RAM",
            'camara' => "Triple, 24 MP, f/1.7 + 8 MP, f/2.4, 120° + 5 MP f/2.2, profundidad",
            'camara_secundaria' => "24 MP, f/2.0, 1080p, HDR",
            'sistema_operativo' => "Android 8.0 Oreo",
            'bateria' => "3300 mAh"
        ]);

        Caracteristica::create([
            // Alcatel 1
            'producto_id' => 17,
            'display' => "5.3 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Mediatek MT6739 quad-core 1.5GHz",
            'memoria' => "16GB almacenamiento interno",
            'memoria_ram' => "1GB RAM",
            'camara' => "13 MP (5059D) / 8 MP, f/2.0, autofocus, flash LED",
            'camara_secundaria' => "frontal 5 MP, flash LED, 720p",
            'sistema_operativo' => "Android 8.1 Oreo",
            'bateria' => "2460 mAh"
        ]);

        Caracteristica::create([
            // Celular Alcatel 3x
            'producto_id' => 18,
            'display' => "6.52 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Mediatek MT6763V Helio P23 octa-core 2GHz",
            'memoria' => "64GB almacenamiento interno",
            'memoria_ram' => "4GB RAM",
            'camara' => "Triple, 16 MP (f/1.8, PDAF, wide) + 8 MP (f/2.2, ultrawide) + 5 MP (f/2.4, profundidad)",
            'camara_secundaria' => "8 MP, f/2.0, 720p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "	4000 mAh"
        ]);

        Caracteristica::create([
            // Tablet Apple iPad 7
            'producto_id' => 19,
            'display' => "10.2 pulgadas, IPS LCD capacitive touchscreen, 16M colors",
            'procesador' => "Quad-core 2.34 GHz (2x Huracán + 2x Zephyr)",
            'memoria' => "128GB",
            'memoria_ram' => "3GB RAM",
            'camara' => "Triple, 16 MP (f/1.8, PDAF, wide) + 8 MP (f/2.2, ultrawide) + 5 MP (f/2.4, profundidad)",
            'camara_secundaria' => "8 MP, f/2.4, 31mm (standard), 1.12µm, AF",
            'sistema_operativo' => "iOS 11.3, actualizable a iPadOS 13.4",
            'bateria' => "Batería Li-Po 8827 mAh no extraíble (32.9 Wh)"
        ]);

        Caracteristica::create([
            // LG Q Series Q7+ 64 GB
            'producto_id' => 20,
            'display' => "5.5 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Octa-core 1.5GHz / Octa-core 1.8GHz",
            'memoria' => "64GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "16 MP",
            'camara_secundaria' => "8 MP ",
            'sistema_operativo' => "Android 8.0 Oreo",
            'bateria' => "3000 mAh"
        ]);

        Caracteristica::create([
            // Nokia 1 Plus
            'producto_id' => 21,
            'display' => "5.45 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Mediatek MT6739WW quad-core 1.5GHz",
            'memoria' => "64GB",
            'memoria_ram' => "1GB RAM",
            'camara' => "8 MP",
            'camara_secundaria' => "5 MP",
            'sistema_operativo' => "Android 9.0 Pie (Go Edition)",
            'bateria' => "2500 mAh"
        ]);

        Caracteristica::create([
            // Huawei Mate 20 Pro 
            'producto_id' => 22,
            'display' => "6.39 pulgadas, AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "HiSilicon Kirin 980 octa-core 2.6GHz",
            'memoria' => "128GB",
            'memoria_ram' => "6GB RAM",
            'camara' => "Triple, 40 MP (f/1.8, wide) + 20 MP (f/2.2, ultra wide) + 8 MP (f/2.4, telefoto)",
            'camara_secundaria' => "24 MP (wide), f/2.0, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4200 mAh"
        ]);
//////////////////////////////////////////////////////////////////
        

        Caracteristica::create([
            // Huawei P40 Lite
            'producto_id' => 23,
            'display' => "6.4 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "HiSilicon Kirin 810 octa-core 2.27GHz",
            'memoria' => "128GB",
            'memoria_ram' => "6GB RAM",
            'camara' => "Cuádruple, 48 MP (f/1.8, PDAF, wide) + 8 MP (f/2.4, ultrawide) + 2 MP (f/2.4, macro) + 2 MP (f/2.4, telefoto)",
            'camara_secundaria' => "16 MP, f/2.0, wide, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4200 mAh"
        ]);

        Caracteristica::create([
            // HUAWEI Y9 Ultra FullView
            'producto_id' => 24,
            'display' => "6.4 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "HiSilicon Kirin 659 octa-core 2.36GHz",
            'memoria' => "32GB",
            'memoria_ram' => "3GB RAM",
            'camara' => "Dual, 13 MP + 2 MP, f/2.2",
            'camara_secundaria' => "Dual: 8 MP + 2 MP / 16 MP + 2 MP (FLA-LX2)",
            'sistema_operativo' => "Android 8.0 Oreo",
            'bateria' => "4200 mAh"
        ]);

        Caracteristica::create([
            //Apple iPhone 6s Plus
            'producto_id' => 25,
            'display' => "5,5 pulgadas,	LCD IPS con luz LED de fondo, touchscreen capacitivo, 16M colores",
            'procesador' => "HiSilicon Kirin 659 octa-core 2.36GHz",
            'memoria' => "32GB",
            'memoria_ram' => "2GB RAM",
            'camara' => "8 MP, 3264x2448 pixels, apertura ƒ/2.2, pixels 1.5µ, autofocus, flash LED tono dual, geo-tagging, foco táctil",
            'camara_secundaria' => "cámara frontal 1.2 MP 720p ƒ/2.2 HDR",
            'sistema_operativo' => "iOS 8",
            'bateria' => "4200 mAh"
        ]);
        Caracteristica::create([
            //Apple iPhone 7 Plus
            'producto_id' => 26,
            'display' => "4,7 pulgadas, LCD IPS con luz LED de fondo, touchscreen capacitivo, 16M colores",
            'procesador' => "HiSilicon Kirin 659 octa-core 2.36GHz",
            'memoria' => "32GB",
            'memoria_ram' => "3GB RAM",
            'camara' => "12 MP, apertura ƒ/1.8, pixels 1.22µ, autofocus por detección de fase, flash LED quad tono dual, HDR, estabilización óptica de imagen",
            'camara_secundaria' => "cámara frontal 7 MP 1080p@30fps, ƒ/2.2, HDR",
            'sistema_operativo' => "iOS 10",
            'bateria' => "Standard, Li-Ion 1960 mAh"
        ]);
       

        Caracteristica::create([
            //Samsung Galaxy J6+
            'producto_id' => 27,
            'display' => "6.0 pulgadas, LCD IPS o TFT touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm MSM8917 Snapdragon 425 quad-core 1.4GHz",
            'memoria' => "32GB",
            'memoria_ram' => "3GB RAM",
            'camara' => "Dual, 13 MP ( f/1.9, wide) + 5 MP (f/2.2, profundidad)",
            'camara_secundaria' => "8 MP, f/1.9",
            'sistema_operativo' => "Android 8.1 Oreo",
            'bateria' => "3300 mAh"
        ]);

        Caracteristica::create([
            //Tablet lenovo M8 HD
            'producto_id' => 28,
            'display' => "pantalla IPS  8 Pulgadas ",
            'procesador' => "Mediatek Helio A22 4 x 2 GHz @ Cortex-A53",
            'memoria' => "32GB",
            'memoria_ram' => "3GB RAM",
            'camara' => "5 MPX AF en la versión HD, 13 MPX AF en la versión FHD",
            'camara_secundaria' => "2 MPX  en la versión HD, 5 MPX en la versión FHD",
            'sistema_operativo' => "Android 9 Pie",
            'bateria' => "5000 mAh Li-Po"
        ]);
        
        Caracteristica::create([
            // LG K Series K50
            'producto_id' => 29,
            'display' => "6,5 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Mediatek MT6762 Helio P22 octa-core 2GHz",
            'memoria' => "32GB",
            'memoria_ram' => "3GB RAM",
            'camara' => "Triple, 13 MP (f/2.2, PDAF, wide) + 5 MP (ultrawide) + 2 MP (f/2.4, profundidad)",
            'camara_secundaria' => "MP, f/2.0, 1080p",
            'sistema_operativo' => "Android 9 Pie",
            'bateria' => "4000 mAh"
        ]);
                
        Caracteristica::create([
            // Motorola Moto G8 Power
            'producto_id' => 30,
            'display' => "6,4 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM665 Snapdragon 665 octa-core 2GHz",
            'memoria' => "64GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "cuádruple, 16 MP (f/1.7, PDAF, wide) + 8 MP (f/2.2, ultrawide) + 8 MP (f/2.2, PDAF, telefoto) + 2 MP (f/2.2, macro)",
            'camara_secundaria' => "16 MP, f/2.0, wide, 1080p, HDR",
            'sistema_operativo' => "Android 9 Pie",
            'bateria' => "5000 mAh"
        ]);
        Caracteristica::create([
            // Motorola One Hyper
            'producto_id' => 31,
            'display' => "6,5 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM675 Snapdragon 675 octa-core 2GHz",
            'memoria' => "128GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "Dual, 64 MP (f/1.9, PDAF y láser) + 8 MP (f/2.2, ultrawide)",
            'camara_secundaria' => "32 MP, f/2.0, pop-up motorizado, 1080p, HDR",
            'sistema_operativo' => "Android 10; Android One",
            'bateria' => "4000 mAh"
        ]);

        Caracteristica::create([
            // Motorola One Macro
            'producto_id' => 32,
            'display' => "6.2 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Mediatek MT6771 Helio P70 octa-core 2GHz",
            'memoria' => "64GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "Triple, 12 MP (f/2.0, PDAF y láser) + 2 MP (f/2.2, macro) + 2 MP (f/2.2, profundidad)",
            'camara_secundaria' => "8 MP, f/2.2, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4000 mAh"
        ]);

        Caracteristica::create([
            // Motorola One Vision
            'producto_id' => 33,
            'display' => "6.3 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Exynos 9609 octa-core 2.2GHz",
            'memoria' => "128GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "Dual, 48 MP (f/1.7, PDAF, OIS, wide) + 5 MP (f/2.2, profundidad)",
            'camara_secundaria' => "25 MP, f/2.0, 1080p",
            'sistema_operativo' => "Android 9.0 Pie (Android One)",
            'bateria' => "3500 mAh"
        ]);

        Caracteristica::create([
            // Motorola One Zoom 
            'producto_id' => 34,
            'display' => "6.4 pulgadas, OLED touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM675 Snapdragon 675 octa-core 2GHz",
            'memoria' => "128GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "Cuádruple, 48 MP (f/1.7, PDAF, OIS, wide) + 8 MP (f/2.4, OIS, telefoto) + 16 MP (f/2.2, ultrawide) + 5 MP (profundidad)",
            'camara_secundaria' => "25 MP, f/2.0, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie (Android One)",
            'bateria' => "4000 mAh"
        ]);

        Caracteristica::create([
            //  Nokia 3.1 Plus
            'producto_id' => 35,
            'display' => "6.0 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Mediatek MT6762 Helio P22 octa-core 2.0GHz",
            'memoria' => "32GB",
            'memoria_ram' => "3GB RAM",
            'camara' => "Dual, 13 MP (f/2.0) + 5 MP (f/2.4, profundidad)",
            'camara_secundaria' => "8 MP, f/2.2, flash LED, HDR, 720p",
            'sistema_operativo' => "Android 8.1 Oreo",
            'bateria' => "3500 mAh"
        ]);
        Caracteristica::create([
            //  Oppo A9 2020
            'producto_id' => 36,
            'display' => "6.5 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM665 Snapdragon 665 octa-core 2GHz",
            'memoria' => "128GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "Cuádruple, 48 MP (f/1.8, PDAF, wide) + 8 MP (f/2.3, ultrawide) + 2 MP (f/2.4) + 2 MP (f/2.4, profundidad)",
            'camara_secundaria' => "16 MP, f/2.0, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "5000 mAh"
        ]);
///////////////////////////////// ac ano anda
        Caracteristica::create([
            //   Oppo Find pro X2
            'producto_id' => 37,
            'display' => "6.7 pulgadas, AMOLED touchscreen capacitivo, 1.07B colores",
            'procesador' => "Qualcomm SM8250 Snapdragon 865 octa-core 2.84GHz",
            'memoria' => "512GB",
            'memoria_ram' => "12GB RAM",
            'camara' => "Triple, 48 MP (f/1.7, PDAF y láser, OIS, wide) + 48 MP (f/2.2, ultrawide) + 12 MP (f/3.0, periscópica, PDAF y láser, OIS, telefoto)",
            'camara_secundaria' => "32 MP, f/2.4, wide, 1080p, HDR",
            'sistema_operativo' => "Android 10",
            'bateria' => "4260 mAh"
        ]);

        Caracteristica::create([
            //  Samsung S8
            'producto_id' => 38,
            'display' => "6.7 pulgadas, AMOLED touchscreen capacitivo, 1.07B colores",
            'procesador' => "Procesador Qualcomm MSM8998 Snapdragon 835 octa-core (4x Kryo@2.3GHz + 4x Kyro@1.9GHz), GPU Adreno 540 / Samsung Exynos 8895 octa-core 2.35GHz",
            'memoria' => "64GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "12 MP, f/1.7, autofocus por detección de fase, flash LED dual, geo-tagging, detección de rostro y sonrisa, foco táctil, estabilización óptica de imagen",
            'camara_secundaria' => "cámara frontal 8 MP, autofocus, f/1.7",
            'sistema_operativo' => "Android OS, v7.0 Nougat",
            'bateria' => "Standard, Li-Ion 3000 mAh"
        ]);

        Caracteristica::create([
            //  Samsung Galaxy S9
            'producto_id' => 39,
            'display' => " 5.8 pulgadas, super AMOLED touchscreen capacitivo, 1.07B colores",
            'procesador' => "Procesador Snapdragon 845 octa-core 2.7GHz, GPU Adreno 630 / Samsung Exynos 9810 octa-core 2.8GHz, GPU Mali-G72 MP18",
            'memoria' => "64GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "12 MP, f/1.5-2.4, autofocus por detección de fase pixel dual, flash LED dual, geo-tagging, detección de rostro y sonrisa, foco táctil, estabilización óptica de imagen",
            'camara_secundaria' => "cámara frontal 8 MP, autofocus, f/1.6, 1440p",
            'sistema_operativo' => "Android 8.0 Oreo",
            'bateria' => "Standard, Li-Ion 3000 mAh"
        ]);

        Caracteristica::create([
            // Samsung Galaxy S9+
            'producto_id' => 40,
            'display' => "6.2 pulgadas, super AMOLED touchscreen capacitivo, 1.07B colores",
            'procesador' => "Procesador Qualcomm MSM8998 Snapdragon 845 octa-core 2.7GHz, GPU Adreno 630 / Samsung Exynos 9810 Octa octa-core 2.8GHz, Mali-G72 MP18",
            'memoria' => "64GB",
            'memoria_ram' => "6GB RAM",
            'camara' => "Dual, 12 MP (f/1.5-2.4, PDAF pixel dual) + 12 MP (f/2.4, Autofocus), flash LED dual, geo-tagging, detección de rostro y sonrisa, foco táctil, estabilización óptica de imagen",
            'camara_secundaria' => "cámara frontal 8 MP, autofocus, f/1.6, 1440p",
            'sistema_operativo' => "Android 8.0 Oreo",
            'bateria' => "Standard, Li-Ion 3500 mAh"
        ]);

        Caracteristica::create([
            // Samsung Galaxy S10e
            'producto_id' => 41,
            'display' => "5.8 pulgadas, super AMOLED touchscreen capacitivo, 1.07B colores",
            'procesador' => "Exynos 9820 octa-core 2.7GHz / Qualcomm SDM855 Snapdragon 855 octa-core 2.84GHz",
            'memoria' => "64GB",
            'memoria_ram' => "6GB RAM",
            'camara' => "Dual, 12 MP (f/1.5~f/2.4, PDAF Dual Pixel, wide, OIS) + 16 MP (f/2.2, ultrawide, FF)",
            'camara_secundaria' => "10 MP, f/1.9, PDAF Dual Pixel, HDR, 1440p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "3100 mAh"
        ]);

        
        Caracteristica::create([
            //  Samsung Galaxy A30s
            'producto_id' => 42,
            'display' => "6.4 pulgadas, super AMOLED touchscreen capacitivo, 1.07B colores",
            'procesador' => "Exynos 7885 octa-core 1.8GHz",
            'memoria' => "64GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "Triple, 25 MP (f/1.7, PDAF) + 8 MP (f/2.2, ultrawide) + 5 MP (f/2.2, profundidad)",
            'camara_secundaria' => "16 MP, f/2.0, 1080p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4000 mAh"
        ]);

        Caracteristica::create([
            //  Samsung Galaxy A80
            'producto_id' => 43,
            'display' => "6.7 pulgadas, super AMOLED touchscreen capacitivo, 1.07B colores",
            'procesador' => "Qualcomm Snapdragon 730 octa-core 2.2GHz",
            'memoria' => "128GB",
            'memoria_ram' => "8GB RAM",
            'camara' => "Triple, 48 MP (f/2.0, PDAF, wide) + 8 MP (f/2.2, ultrawide) + TOF 3D",
            'camara_secundaria' => "Cámara principal rotativa pop-up motorizada",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "3700 mAh"
        ]);

        Caracteristica::create([
            //  Samsung Galaxy A10
            'producto_id' => 44,
            'display' => "6.2 pulgadas, LCD IPS touchscreen capacitivo, 16M colores",
            'procesador' => "Exynos 7884 octa-core 1.6GHz",
            'memoria' => "32GB",
            'memoria_ram' => "2GB RAM",
            'camara' => "13 MP (f/1.9, wide)",
            'camara_secundaria' => "5 MP, f/2.0, flash LED, 1080p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "3400 mAh"
        ]);

        
        Caracteristica::create([
            //  Samsung Galaxy J2 Core
            'producto_id' => 45,
            'display' => "5.0 pulgadas,	TFT touchscreen capacitivo, 16M colores",
            'procesador' => "Exynos 7570 Quad quad-core 1.4GHz",
            'memoria' => "8GB",
            'memoria_ram' => "1GB RAM",
            'camara' => "8 MP, f/2.2",
            'camara_secundaria' => "5 MP, f/2.2",
            'sistema_operativo' => "Android 8.0 Oreo",
            'bateria' => "2600 mAh"
        ]);

        Caracteristica::create([
            //  Samsung Galaxy M10
            'producto_id' => 46,
            'display' => "6.22 pulgadas, 19:9,	TFT touchscreen capacitivo, 16M colores",
            'procesador' => "	Exynos 7870 Octa octa-core 1.6GHz",
            'memoria' => "16GB",
            'memoria_ram' => "2GB RAM",
            'camara' => "Dual, 13 MP (f/1.9, PDAF) + 5 MP (f/2.2, profundidad)",
            'camara_secundaria' => "5 MP, f/2.0, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "3400 mAh"
        ]);

       

        Caracteristica::create([
            //  Samsung Galaxy A71
            'producto_id' => 47,
            'display' => "6.7 pulgadas, Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM730 Snapdragon 730 octa-core 2.2GHz",
            'memoria' => "128GB",
            'memoria_ram' => "6GB RAM",
            'camara' => "Cuádruple, 64 MP (f/1.8, PDAF, wide) + 12 MP (f/2.2, ultrawide) + 5 MP (f/2.4, macro) + 5 MP (f/2.2, profundidad)",
            'camara_secundaria' => "32 MP, f/2.2, 1080p, HDR",
            'sistema_operativo' => "Android 8.0 Oreo",
            'bateria' => "4500 mAh"
        ]);

        Caracteristica::create([
            //  Samsung Galaxy S20+
            'producto_id' => 48,
            'display' => "6.7 pulgadas, 20:9, Dynamic AMOLED 2X touchscreen capacitivo, 16M colores",
            'procesador' => "Exynos 990 octa-core 2.73GHz / Qualcomm SM8250 Snapdragon 865 2.84GHz",
            'memoria' => "128GB almacenamiento interno",
            'memoria_ram' => "8GB RAM",
            'camara' => "Triple, 12 MP (f/1.8, PDAF Dual Pixel, OIS, wide) + 64 MP (f/2.0, telefoto, OIS, PDAF) + 12 MP (f/2.2, ultrawide, AF)",
            'camara_secundaria' => "10 MP, f/2.2, PDAF Dual Pixel, wide, HDR, 2160p@30/60fps, 1080p@30fps",
            'sistema_operativo' => "Android 10",
            'bateria' => "	4500 mAh"
        ]);

      

        Caracteristica::create([
            // samsung galaxy tab s6
            'producto_id' => 49,
            'display' => "10.5 pulgadas, 16:10, Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM855 Snapdragon 855 octa-core 2.84GHz",
            'memoria' => "256GB",
            'memoria_ram' => "8GB RAM",
            'camara' => "Dual, 13 MP (f/2.0, wide, AF) + 5 MP (f/2.2, ultrawide)",
            'camara_secundaria' => "8 MP, f/2.0, 1080p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "7040 mAh"
        ]);


        Caracteristica::create([
            // Sony Xperia 1
            'producto_id' => 50,
            'display' => "6.5 pulgadas, OLED touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM855 Snapdragon 855 octa-core 2.84GHz",
            'memoria' => "256GB",
            'memoria_ram' => "8GB RAM",
            'camara' => "Triple, 12 MP (f/1.6, PDAF Dual Pixel, OIS, wide) + 12 MP (f/2.4, telefoto, PDAF Dual Pixel, OIS) + 12 MP (f/2.4, ultra wide)",
            'camara_secundaria' => "8 MP, f/2.0, 1080p, HDR, EIS",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "3300 mAh"
        ]);

        Caracteristica::create([
            //  Xiaomi Mi 9T
            'producto_id' => 51,
            'display' => "6.39 pulgadas, 19.5:9,AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM730 Snapdragon 730 octa-core 2.2GHz",
            'memoria' => "64GB",
            'memoria_ram' => "6GB RAM",
            'camara' => "Triple, 48 MP (f/1.75, PDAF) + 8 MP (f/2.4, PDAF, telefoto ) + 13 MP (f/2.4, ultrawide)",
            'camara_secundaria' => "20 MP, f/2.2, mecanismo pop-up motorizado, HDR, 1080p",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "4000 mAh"
        ]);

        Caracteristica::create([
            //  Tablet Xiaomi Mi Pad 4
            'producto_id' => 52,
            'display' => "6.39 pulgadas, 19.5:9, AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM660 Snapdragon 660 octa-core 2.2GHz",
            'memoria' => "64GB",
            'memoria_ram' => "4GB RAM",
            'camara' => "13 MP, f/2.0",
            'camara_secundaria' => "5 MP, f/2.0",
            'sistema_operativo' => "Android 8.1 Oreo",
            'bateria' => "6000 mAh"
        ]);

        Caracteristica::create([
            //  Xiaomi Mi Note 10
            'producto_id' => 53,
            'display' => "6.47 pulgadas, 19.5:9, Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM730 Snapdragon 730G octa-core 2.2GHz",
            'memoria' => "256GB",
            'memoria_ram' => "12GB RAM",
            'camara' => "Cinco, 108 MP (f/1.7, PDAF y láser, OIS, wide) + 5 MP (f/2.0, PDAF y láser, OIS, telefoto) + 12 MP (f/2.0, PDAF Dual Pixel y láser, telefoto) + 20 MP (f/2.2, AF láser, ultrawide) + 2 MP (f/2.4, macro)",
            'camara_secundaria' => "32 MP, f/2.0, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "5260 mAh"
        ]);

        Caracteristica::create([
            //  Xiaomi Mi Note 10 PRO
            'producto_id' => 54,
            'display' => "6.47 pulgadas, 19.5:9, Super AMOLED touchscreen capacitivo, 16M colores",
            'procesador' => "Qualcomm SDM730 Snapdragon 730G octa-core 2.2GHz",
            'memoria' => "256GB",
            'memoria_ram' => "8GB RAM",
            'camara' => "Cinco, 108 MP (f/1.7, PDAF y láser, OIS, lente 8P, wide) + 5 MP (f/2.0, PDAF y láser, OIS, telefoto) + 12 MP (f/2.0, PDAF Dual Pixel y láser, telefoto) + 20 MP (f/2.2, AF láser, ultrawide) + 2 MP (f/2.4, macro)",
            'camara_secundaria' => "32 MP, f/2.0, 1080p, HDR",
            'sistema_operativo' => "Android 9.0 Pie",
            'bateria' => "5260 mAh"
        ]);

        Caracteristica::create([
            //  SAMSUNG GALAXY Z FLIP
            'producto_id' => 55,
            'display' => "6.7, 1080 x 2636 pixels",
            'procesador' => "Snapdragon 855+ 2.95GHz",
            'memoria' => "512GB",
            'memoria_ram' => "8GB ",
            'camara' => "12 mpx con flash LED | Dual | Zoom Digital 8x",
            'camara_secundaria' => "Cámara secundaria: 10 mpx",
            'sistema_operativo' => "Android 10",
            'bateria' => "3300 mAh"
        ]);

        Caracteristica::create([
            //  LG Q60
            'producto_id' => 56,
            'display' => "6.26, 720 x 1520 pixels",
            'procesador' => "Octa Core 2.0 GHz",
            'memoria' => "64GB",
            'memoria_ram' => "3GB ",
            'camara' => "Triple, 16MP+5MP+2MP",
            'camara_secundaria' => "Cámara secundaria: 13 mpx",
            'sistema_operativo' => "Android 9.0",
            'bateria' => "3500 mAh"
        ]);

        Caracteristica::create([
            //  Samsung Galaxy S10 Negro
            'producto_id' => 57,
            'display' => "6.4, 1440 x 3040 pixels",
            'procesador' => "Exynos 9820 2.7GHz/Snapdragon 855 2.84GHz",
            'memoria' => "128GB",
            'memoria_ram' => "8GB ",
            'camara' => "Triple, 12MP+12MP+16MP",
            'camara_secundaria' => "El S10 tiene una sola cámara frontal que cuenta con tecnología de enfoque automático Dual Pixel y selfie UHD de 10MP.",
            'sistema_operativo' => "Android 9.0",
            'bateria' => "4100 mAh"
        ]);

        Caracteristica::create([
            //  Samsung Galaxy Note 10 Rosa
            'producto_id' => 58,
            'display' => "6.3, 1440 x 3040 pixels",
            'procesador' => "Snapdragon 855+ 2.96GHz / Exynos 9825 2.73GHz",
            'memoria' => "256GB",
            'memoria_ram' => "8GB ",
            'camara' => "Triple, 12MP+12MP+16MP",
            'camara_secundaria' => "10 MP
            Cámara de selfie",
            'sistema_operativo' => "Android 9.0",
            'bateria' => "3500 mAh"
        ]);
    }
}

