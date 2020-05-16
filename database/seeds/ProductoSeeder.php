<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Producto;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'modelo' => "Motorola Z3 play 64 GB",
            'precio' => 23499,
            'oferta' => 8,
            'imagen' => "70007454_4Moto Z3 Play.jpg",
            'imagenes' =>'["70007454_3Moto Z3 Play.jpg","70007454_2Moto Z3 Play.jpg","70007454_4Moto Z3 Play.jpg"]' ,
            'descripcion' => 'El Motorola Moto Z3 Play llega como la tercera generación de la serie Moto Z, manteniendo la posibilidad de utilizar accesorios Moto Mod. El Moto Z3 Play tiene una pantalla Super AMOLED de 6.01 pulgadas a 1080 x 2160 pixels de resolución, procesador Snapdragon 636 con 4GB de RAM y 32GB o 64GB de almacenamiento, cámara dual de 12 MP + 5 MP con PDAF, batería de 3000 mAh, lector de huellas y Android 8.1 Oreo.',
            'cantidad' => 12 ,
            'marca_id' => 2,
            'categoria_id' => 1 ,
          
        ]);

        Producto::create([
            'modelo' => "LG K9 16 GB black 2 GB RAM",
            'precio' => 8999,
            'imagen' => "70007493lg-k9.jpg",
            'imagenes' =>'["70007493_3lg-k9.jpg","70007493_2lg-k9.jpg","70007493lg-k9.jpg"]' ,
            'descripcion' => 'LG K9. El LG K9 es un smartphone Android con una pantalla HD de 5 pulgadas, procesador Snapdragon 210 quad-core, 2GB de RAM, 16GB o 32GB de almacenamiento interno ampliable hasta 2TB, cámara principal de 8 megapixels, cámara frontal de 5 megapixels, batería de 2500 mAh y corre Android 7.1.2 Nougat',
            'cantidad' => 5 ,
            'marca_id' => 6,
            'categoria_id' => 1 ,
           
           
        ]);
        Producto::create([
            'modelo' => "Apple iPhone XS Max Dual SIM 256 GB Pink espacial 4 GB RAM",
            'precio' => 136000 ,
            'imagen' => "70007513iphone-xs.max.jpg",
            'imagenes' =>'["70007513_3iphone-xs-max.jpg","70007513_2iphone-xs-max.jpg","70007513iphone-xs.max.jpg"]' ,
            'descripcion' => 'El Apple iPhone XS Max es el iPhone más grande que se haya lanzado a la fecha, con una pantalla Super Retina OLED de 6.5 pulgadas. Compartiendo el resto de sus características con el iPhone XS, encontramos un procesador A12 Bionic con 64GB, 256GB o 512GB de almacenamiento, cámara dual de 12 MP con zoom óptico y estabilización óptica de imagen, parlantes stereo, resistencia al agua IP68, desbloqueo por rostro Face ID y corre iOS 12.',
            'cantidad' => 8 ,
            'marca_id' => 9,
            'categoria_id' => 1 ,
           
           
        ]);

        Producto::create([
            'modelo' => "Apple iPhone XR Dual SIM 64 GB Negro 3 GB RAM", 
            'precio' => 79999 ,
            'oferta' => 8,
            'imagen' => "70007521iphone-xr-64gb.jpg",
            'imagenes' =>'["70007521_2iphone-xr-64gb.jpg","70007521_3iphone-xr-64gb.jpg","70007521iphone-xr-64gb.jpg"]' ,
            'descripcion' => 'El Apple iPhone XR corre el sistema operativo iOS 12. El espesor del Apple iPhone XR es de 8.3 mm y pesa 194 g. La pantalla del Apple iPhone XR es de 6.1" a resolución 828 x 1792 pixels.
            El Apple iPhone XR está potenciado por un procesador Apple A12 Bionic, acompañado de 3GB de memoria RAM.
            Su almacenamiento es de 64GB/128GB/256GB . La cámara principal es 12 MP y graba video , y una batería de 2942 mAh lo mantiene en funcionamiento.
            El Apple iPhone XR cuenta parlantes stereo',
            'cantidad' => 10 ,
            'marca_id' => 9,
            'categoria_id' => 1 ,
         
          
        ]);

        Producto::create([
            'modelo' => "Motorola moto G7 Play 32 GB Oro fino 2 GB RAM", 
            'precio' => 15200 ,
            'imagen' => "70007552Moto G Play 7ma Gen.jpg",
            'imagenes' =>'["70007552_3Moto G Play 7ma Gen.jpg","70007552_2Moto G Play 7ma Gen.jpg","70007552Moto G Play 7ma Gen.jpg"]' ,
            'descripcion' => 'El Motorola Moto G7 Play es la variante más básica de la serie Moto G7. Con una pantalla HD+ de 5.7 pulgadas, el Moto G7 Play tiene un procesador Snapdragon 632 de ocho núcleos, aunque con sólo 2GB de RAM y 32GB de almacenamiento interno. El Moto G7 Play tiene una cámara trasera de 13 MP, mientras que su cámara frontal es de 8 MP y completa sus características con una batería de 3000 mAh, lector de huellas y Android 9.0 Pie.',
            'cantidad' => 8,
            'marca_id' => 2,
            'categoria_id' => 1 ,
           
           
        ]);

        Producto::create([
            'modelo' => "Motorola Moto G G7 Plus 64 GB Índigo 4 GB RAM", 
            'precio' => 34499 ,
            'oferta' => 6,
            'imagen' => "70007554Moto G Plus 7ma Gen.jpg",
            'imagenes' =>'["70007554_3Moto G Plus 7ma Gen.jpg","70007554_2Moto G Plus 7ma Gen.jpg","70007554Moto G Plus 7ma Gen.jpg"]' ,
            'descripcion' => 'El Motorola Moto G7 Plus mejora al Moto G7 en algunos aspectos clave. Manteniendo la pantalla Full HD+ de 6.2 pulgadas, el Moto G7 Plus está potenciado por un procesador Snapdragon 636 octa-core, con 4GB de RAM y 64GB de almacenamiento interno expandible. La cámara del Moto G7 Plus es dual de 16 MP + 5 MP, y su cámara para selfies es de 12 MP. Con parlantes stereo y sonido Dolby, el Moto G7 Plus también tiene una batería de 3000 mAh, pero esta vez con carga de 27W con el protocolo Quick Charge 4.0 de Qualcomm, lector de huellas posterior, puerto USB-C y corre Android 9.0 Pie.',
            'cantidad' => 6,
            'marca_id' => 2,
            'categoria_id' => 1 ,
           
            
        ]);

        Producto::create([
            'modelo' => "Motorola Moto E E5 Play 16 GB Negro 1 GB RAM", 
            'precio' => 8999 ,
            'imagen' => "70007618Moto E5 Play.jpg",
            'imagenes' =>'["70007618_3Moto E5 Play.jpg","70007618_2Moto E5 Play.jpg","70007618Moto E5 Play.jpg"]' ,
            'descripcion' => 'El Motorola Moto E5 Play es el smartphone más básico de la serie Moto E (2018). El Moto E5 Play de 5.2 pulgadas a resolución HD, procesador quad-core, 2GB de RAM, 16GB de almacenamiento interno, cámaras de 8 MP y 5 MP, lector de huellas, batería de 2800 mAh y corre Android 8.0 Oreo.',
            'cantidad' => 18,
            'marca_id' => 2,
            'categoria_id' => 1 ,
           
           
        ]);
        Producto::create([
            'modelo' => "Samsung Galaxy A70 (edicion limitada) 128 GB Blanco 6 GB RAM", 
            'precio' => 42999,
            'imagen' => "70007649a70-128.jpg",
            'imagenes' =>'["70007649_3a70-128.jpg","70007649_2a70-128.jpg","70007649a70-128.jpg"]',
            'descripcion' => 'El Samsung Galaxy A70 completa la serie Galaxy A del 2019. Con una pantalla Full HD+ de 6.7 pulgadas, el Galaxy A70 está potenciado por un procesador octa-core a 2GHz con 6GB o 8GB de memoria RAM y 128GB de almacenamiento interno. La cámara principal del Galaxy A70 es triple, en configuración 24MP + 8MP + 5MP, y su cámara para selfies es de 32MP. Completando sus características, el Galaxy A70 tiene lector de huellas embebido en pantalla, batería de 4500 mAh de carga rápida, puerto USB-C, y corre Android 9.0 Pie.',
            'cantidad' => 12,
            'marca_id' => 1,
            'categoria_id' => 1 ,
            
          
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy Note10+ 256 GB Aura glow 12 GB RAM", 
            'precio' => 149999,
            'imagen' => "70007740Samsung Galaxy Note10 Plus 512GB.jpg",
            'imagenes' =>'["70007740_3Samsung Galaxy Note10 Plus 512GB.jpg","70007740_2Samsung Galaxy Note10 Plus 512GB.jpg","70007740Samsung Galaxy Note10 Plus 512GB.jpg"]',
            'descripcion' => 'El Samsung Galaxy Note 10+ marca la décima generación de la serie flagship de Samsung y es el modelo más poderoso de la serie Note 10. El Galaxy Note 10+ llega con una pantalla Dynamic AMOLED de 6.8 pulgadas a resolución QHD+ y está potenciado por un procesador Snapdragon 855+ en USA y China, mientras que en el resto del mundo utiliza el Exynos 9825. Con 12GB de memoria RAM y 256GB o 512GB de almacenamiento interno expandible, el Galaxy Note 10+ tiene una cámara cuádruple de 12 MP + 12 MP + 16 MP + ToF VGA en su posterior, mientras que al frente su cámara selfie es de 10 MP de gran angular y autofoco, incrustada en la pantalla perforada. El Galaxy Note 10+ completa sus características con una batería de 4300 mAh con soporte para carga rápida, parlantes stereo, lector de huellas embebido en pantalla, reconocimiento de iris, sonido HiFi, soporte para el stylus S Pen mediante Bluetooth y corre One UI con Android 9.0 Pie debajo',
            'cantidad' => 4,
            'marca_id' => 1,
            'categoria_id' => 1 ,
          
           
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy A50 64 GB Negro 4 GB RAM", 
            'precio' => 37999,
            'imagen' => "70007734a50-128.jpg",
            'imagenes' =>'["70007734_3a50-128.jpg","70007734_2a50-128.jpg","70007734a50-128.jpg"]',
            'descripcion' => 'El Samsung Galaxy A50 tiene una pantalla Infinity-U Super AMOLED de 6.4 pulgadas a resolución Full HD+ y está potenciado por un procesador Exynos 9610 de ocho núcleos con 4GB de memoria RAM y 64GB de almacenamiento o bien 6GB de RAM y 128GB de almacenamiento. La cámara del Galaxy A50 es triple, de 25 MP + 5 MP + 8 MP, y su cámara para selfies es de 25 MP. El Galaxy A50 completa sus características con una batería de 4000 mAh con carga rápida, lector de huella embebido en pantalla, puerto USB-C y Android 9.0 Pie.',
            'cantidad' => 6,
            'marca_id' => 1,
            'categoria_id' => 1 ,
          
          
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy A30s 64 GB Prism crush black 4 GB RAM", 
            'precio' => 23999,
            'imagen' => "70007737-a30s.jpg",
            'imagenes' =>'["70007737_3-a30s.jpg","70007737_2-a30s.jpg","70007737-a30s.jpg"]',
            'descripcion' => 'El Samsung Galaxy A30s cuenta con una pantalla HD+ de 6.4 pulgadas. Potenciado por un procesador Exynos 7885 de ocho núcleos, el Galaxy A30s está disponible en variantes de 3GB de memoria RAM y 32GB de almacenamiento, o bien 4GB de memoria RAM con 64GB o 128GB de almacenamiento interno, en todos los casos expandible vía microSD. Con una cámara triple de 25 MP + 8 MP + 5 MP en su parte posterior, el Galaxy A30s tiene una cámara para selfies de 16 MP, y completa sus características con una batería de 4000 mAh con carga rápida, puerto USB-C, lector de huellas óptico bajo pantalla, y corre Android 9.0 Pie.',
            'cantidad' => 8,
            'marca_id' => 1,
            'categoria_id' => 1 ,
           
            
        ]);

        Producto::create([
            'modelo' => "Apple iPhone 11 Pro Max Dual SIM 256 GB Gris espacial 4 GB RAM", 
            'precio' => 189999,
            'imagen' => "70007760iphone-pro-256.jpg",
            'imagenes' =>'["70007760_2iphone-pro-max-256.jpg","70007760iphone-pro-256.jpg","70007760iphone-pro-256.jpg"]',
            'descripcion' => 'El Apple iPhone 11 Pro es el sucesor del iPhone Xs. Con una pantalla OLED Super Retina XDR, el iPhone 11 Pro está potenciado por un procesador A13 Bionic de Apple, con opciones de almacenamiento de 64GB, 256GB o 512GB. La cámara posterior del iPhpne 11 Pro es triple, de 12 MP + 12 MP + 12 MP, mientras que su cámara frontal también es de 12 MP. El iPhone 11 Pro también tiene parlantes stereo con sonido Dolby Atmos, batería con carga rápida e inalámbrica, resistencia al agua, desbloqueo facial Face ID, Apple Pay y corre iOS 13.',
            'cantidad' => 5,
            'marca_id' => 9,
            'categoria_id' => 1 ,
           
           
        ]);

        Producto::create([
            'modelo' => "Samsung A 20s 32gb Nuevo Lanzamiento L/ Huella", 
            'precio' => 25199,
            'imagen' => "70007970-a20s.jpg",
            'imagenes' =>'["70007970_3-a20s.jpg","70007970_2-a20s.jpg","70007970-a20s.jpg"]',
            'descripcion' => 'El Samsung Galaxy A20 completa la gama Galaxy Ax entre el Galaxy A10 y el Galaxy A30. Con una pantalla Infinity-V HD+ de 6.4 pulgadas, el Galaxy A20 está potenciado por un procesador Exynos 7884 de ocho núcleos, con 3GB de memoria RAM y 32GB de almacenamiento interno. La cámara principal del Galaxy A20 es dual de 13 MP + 5 MP y la cámara para selfies es de 8 megapixels. Completando sus características, el Galaxy A20 tiene una gran batería de 4000 mAh con carga rápida, lector de huellas, y corre Android 9.0 Pie.',
            'cantidad' => 5,
            'marca_id' => 1,
            'categoria_id' => 1 ,
         
            
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy A 51 128 Gb 4 Ram Dual Sim 6 S/interes", 
            'precio' =>  42800,
            'oferta' => 10,
            'imagen' => "70007974.jpg",
            'imagenes' =>'["70007974_2.jpg","70007974_3.jpg","70007974.jpg"]',
            'descripcion' => 'El Samsung Galaxy A51 es el sucesor del Galaxy A50, que llega con una pantalla Full HD+ de 6.5 pulgadas con relación de aspecto 20:9 y potenciado por un procesador Exynos 9611 acompañado de variantes de 4GB, 6GB o 8GB de memoria RAM y 64GB o 128GB de almacenamiento interno expandible. La cámara principal del Galaxy A51 consta de cuatro lentes de 48 MP + 12 MP + 5 MP + 5 MP, mientras que la cámara frontal para selfies es de 32 MP en configuración Infinity-O. Completando las características del Samsung Galaxy A51 encontramos una batería de 4000 mAh con soporte para carga rápida, puerto USB-C, lector de huellas óptico bajo la pantalla, y curiosamente, Android 9.0 Pie.',
            'cantidad' => 5,
            'marca_id' => 1,
            'categoria_id' => 1 ,
        
            
        ]);

        Producto::create([
            'modelo' => "Motorola Moto E E6 Play 32 GB Steel black 2 GB RAM", 
            'precio' =>  11999,
            'imagen' => "70008002Moto E6 Play.jpg",
            'imagenes' =>'["70008002_3Moto E6 Play.jpg","70008002_2Moto E6 Play.jpg","70008002Moto E6 Play.jpg"]',
            'descripcion' => 'El Motorola Moto E6 Play es la variante más económica de la serie Moto E6. Con una pantalla HD+ de 5.5 pulgadas, el Moto E6 Play está potenciado por un procesador Mediatek MT6739, acompañado de 2GB de memoria RAM y 32GB de almacenamiento. Con una cámara de 13 MP en su parte posterior, el Moto E6 Play tiene una cámara para selfies de 5 MP. El Moto E6 Play completa sus características con una batería de 3000 mAh, lector de huellas capacitivo y corre Android 9.0 Pie',
            'cantidad' => 9,
            'marca_id' => 2,
            'categoria_id' => 1 ,
         
           
        ]);
        Producto::create([
            'modelo' => "Samsung Galaxy A7 (2018) 64 GB Negro 4 GB RAM", 
            'precio' =>  24499,
            'imagen' => "A7_2018_Blue_Front.png",
            'imagenes' =>'["A7_2018_Blue_Side.png","A7_2018_Blue_Back.png","A7_2018_Blue_Front.png"]',
            'descripcion' => 'El Samsung Galaxy A7 (2018) es el primer smartphone de Samsung en contar con una cámara triple: 24 MP, 8 MP para ángulo amplio, y 5 MP para profundidad. Por dentro, el Galaxy A7 (2018) tiene un procesador octa-core a 2.2GHz acompañado de configuraciones de 4GB de RAM con 64GB o 128GB de almacenamiento, o bien 6GB de RAM y 128GB de memoria interna. Corriendo Android 8.0 Oreo, el Galaxy A7 2018 también cuenta con una cámara de 24 MP para selfies, una pantalla Super AMOLED Full HD+ de 6 pulgadas, y batería de 3300 mAh.',
            'cantidad' => 5,
            'marca_id' => 1,
            'categoria_id' => 1 ,
            
            
        ]);
        Producto::create([
            'modelo' => "Alcatel 1 8 GB Negro metálico 1 GB RAM", 
            'precio' =>  3499,
            'imagen' => "alcatel_1_negro.png",
            'imagenes' =>'["alcatel_1_negro_atras_1_1.png","alcatel-1-negro_rotada_2.png","alcatel_1_negro.png"]',
            'descripcion' => 'El Alcatel 1X es un smartphone económico de Alcatel pero que cuenta con pantalla 18:9, el primero en un smartphone de menos de 100 dólares. El Alcatel 1X tiene una pantalla de 5.3 pulgadas a 480 x 960 pixels de resolución, procesador quad-core, 1GB o 2GB de RAM, 16GB de almacenamiento interno, cámaras de 8MP o 13 MP, cámara frontal de 5 MP, batería de 2460 mAh y corre Android 8.1 Oreo, con algunos mercados corriendo la variante Android Go.',
            'cantidad' => 10,
            'marca_id' => 8,
            'categoria_id' => 1 ,
           
           
        ]);

        Producto::create([
            'modelo' => "Celular Alcatel 3x 64gb 4gb Ram 4000mah Triple Camara", 
            'precio' =>  22999,
            'imagen' => "alcatel_3x_1.png",
            'imagenes' =>'["alcatel_3x-atras.png","alcatel_3x-atras-rotada.png","alcatel_3x_1.png"]',
            'descripcion' => 'El Alcatel 3X es una variante del Alcatel 3 con pantalla HD+ de 5.7 pulgadas, procesador quad-core a 1.3GHz, variantes de 2GB de RAM y 16GB de almacenamiento o 3GB de RAM y 32GB de almacenamiento, cámara dual de 13 MP + 5 MP, cámara frontal de 5 MP con flash LED, lector de huellas dactilares, batería de 3000 mAh y corre Android 7.1 Nougat.',
            'cantidad' => 7,
            'marca_id' => 8,
            'categoria_id' => 1 ,
           
        ]);

        Producto::create([
            'modelo' => "Tablet Apple iPad 7 Gen 2019 Pantalla 10,2 Retina 128gb", 
            'precio' =>  58699,
            'oferta' => 8,
            'imagen' => "apple-ipad-mini-2019-81057-g.jpg",
            'imagenes' =>'["apple-ipad-mini-2019-81058-g.jpg","apple-ipad-mini-2019-81059-g.jpg","apple-ipad-mini-2019-81057-g.jpg"]',
            'descripcion' => 'El Apple iPad 10.2 es la séptima generación del iPad, que llega este año con una pantalla de 10.2 pulgadas con resolución Retina, un procesador A10 Fusion con variantes de almacenamiento de 32GB o 128GB, cámara principal de 8 megapixels, cámara frontal de 1.2 megapixels, parlantes stereo, soporte para stylus, lector de huellas montado al frente, batería que provee hasta 10 hs de uso, y variantes solo Wi-Fi, y GPS + LTE.',
            'cantidad' => 10,
            'marca_id' => 9,
            'categoria_id' => 2 ,
            
           
        ]);
        Producto::create([
            'modelo' => "LG Q Series Q7+ 64 GB Aurora black 4 GB RAM", 
            'precio' =>  21899,
            'imagen' => "lg-q7-plus-frente.png",
            'imagenes' =>'["lg-q7-plus-frente.png","lg-q7-plus-dorso.png"]',
            'descripcion' => 'El LG Q7 Plus tiene un tamaño de 5,5 pulgadas en la diagonal de su pantalla. El panel es de tipo IPS con una resolución de 2160x1080 píxeles. La densidad media, que mide el número de píxeles que es capaz de mostrar el movil en una pulgada, en este caso es de 442 píxeles por pulgada.A nivel de diseño el LG Q7 Plus presume de unas dimensiones de 143,8 mm de alto por 69,3 mm de anchocon un grosor de 8,4 mm. El peso del movil es exactamente de 145 g, batería incluida. Su nivel de resistencia al agua y al polvo es de IP69. Otro aspecto importante que merece la pena resaltar en lo relativo al diseño del Q7 Plus es que el movil sí tiene conector jack para auriculares. A nivel de diseño es importante destacar que el movil no tiene lector de huellas. Puedes comprarlo en las tiendas en Negro, rosa, Azul.',
            'cantidad' => 4,
            'marca_id' => 6,
            'categoria_id' => 1 ,
          
            
        ]);

        Producto::create([
            'modelo' => "Nokia 1 Plus 16 GB Negro 1 GB RAM", 
            'precio' => 8999,
            'imagen' => "frente_2_16.png",
            'imagenes' =>'["dorso_8Nokia 1 Plus.png","frente_2_16.png"]',
            'descripcion' => 'El Nokia 1 Plus es la renovación del Nokia 1 corriendo la edición Go de Android, con una pantalla FWVGA+ de 5.45 pulgadas, procesador quad-core a 1.5GHz, 1GB de memoria RAM, 8GB de almacenamiento expandible, cámara trasera de 8 MP con flash, cámara para selfies de 5 MP, batería de 2500 mAh, y puerto microUSB.',
            'cantidad' => 15,
            'marca_id' => 10,
            'categoria_id' => 1 ,
         
           
        ]);

        Producto::create([
            'modelo' => "Huawei Mate 20 Pro 128 GB Negro 6 GB RAM", 
            'precio' => 32494,
            'oferta' => 5,
            'imagen' => "huawei-mate-20-3d-model-max.jpg",
            'imagenes' =>'["huawei-mate-20-pro-4g-128gb-6gb-ram-id-tactil-en-pantalla-4k.jpg","huawei-mate-20-pro-500x500-462x462.jpg","huawei-mate-20-3d-model-max.jpg"]',
            'descripcion' => 'El Huawei Mate 20 Pro es la versión superior de la nueva serie Mate 20. Con una pantalla OLED QHD+ de 6.39 pulgadas, el Mate 20 Pro cuenta con un procesador Kirin 980 octa-core con configuraciones de 6GB de RAM y 128GB de almacenamiento o bien 8GB de RAM con 256GB de almacenamiento. La cámara principal del Huawei Mate 20 Pro consta de tres lentes de 40 MP + 20 MP + 8 MP provistos por Leica, y una cámara frontal para selfies de 24 MP. El Mate 20 Pro tiene parlantes stereo, sonido HiFi, lector de huellas integrado en la pantalla, reconocimiento de rostro Face ID, batería de 4200 mAh con soporte para carga rápida e inalámbrica, y corre Android 9.0 Pie con la interfaz EMUI 9.0.',
            'cantidad' => 8,
            'marca_id' => 3,
            'categoria_id' => 1 ,
           
            
        ]);

        Producto::create([
            'modelo' => "Huawei P40 Lite Kirin 810 6gb Ram 128gb 48 Mpx", 
            'precio' => 59940,
            'imagen' => "huawei-p40-lite-85918-g.jpg",
            'imagenes' =>'["huawei-p40-lite-86112-g.jpg","huawei-p40-lite-86113-g.jpg"]',
            'descripcion' => '',
            'cantidad' => 6,
            'marca_id' => 3,
            'categoria_id' => 1 ,
          
           
        ]);

        Producto::create([
            'modelo' => "HUAWEI Y9 Ultra FullView Display 48MP Triple Camera 6GB+128GB", 
            'precio' => 39900,
            'imagen' => "huawei-y9s-84567-g.jpg",
            'imagenes' =>'["huawei-y9s-84566-g.jpg","huawei-y9s-84567-g.jpg"]',
            'descripcion' => 'El Huawei P40 Lite es el smartphone más sencillo de la serie P40. Con una pantalla Full HD+ de 6.4 pulgadas, el Huawei P40 Lite está potenciado por un procesador Kirin 810 octa-core, acompañado de 6GB de memoria RAM con 128GB de espacio de almacenamiento interno expandible vía memorias NM propietarias de huawei. Con una cámara cuádruple de 48 MP + 8 MP + 2 MP + 2 MP, el Huawei P40 Lite tiene una cámara para selfies de 16 MP y completa sus características con una batería de 4200 mAh con soporte para carga rápida, USB-C, lector de huellas montado de costado y corre la versión AOSP de Android 10, es decir no dispone de los servicios Google incluidos en Android.',
            'cantidad' => 10,
            'marca_id' => 3,
            'categoria_id' => 1 ,
          
            
        ]);

        Producto::create([
            'modelo' => "Apple iPhone 6s Plus 32 GB Plata 2 GB RAM", 
            'precio' =>  49999,
            'imagen' => "iPhone 6s plus_Grey_frente.jpg",
            'imagenes' =>'["iPhone 6s plus_dorso.jpg","iPhone 6s plus_Grey_costado.jpg","iPhone 6s plus_Grey_frente.jpg"]',
            'descripcion' => 'El Apple iPhone 6 Plus es la versión del nuevo iPhone con una pantalla de 5.5 pulgadas a resolución 1080p, siendo la apuesta más fuerte de Apple. El iPhone 6 Plus mantiene las características del iPhone 6 - Nuevo procesador A8, 16GB, 64GB o 128GB de almacenamiento interno, cámara trasera de 8 megapixels con flash, cámara frontal de 1.2MP, conectividad 4G LTE y iOS 8 - pero agrega estabilización óptica de imagen en su cámara, y una batería que permite hasta 24 horas de conversación en forma continuada.',
            'cantidad' => 5,
            'marca_id' => 9,
            'categoria_id' => 1 ,
        
          
        ]);

    
        Producto::create([
            'modelo' => "Apple iPhone 7 Plus 32 GB Negro mate 3 GB RAM", 
            'precio' =>  90500,
            'imagen' => "iphone 7b.jpg",
            'imagenes' =>'["iphone 7.jpg","iphone 7b.jpg"]',
            'descripcion' => 'El Apple iPhone 7 Plus mejora las características del iPhone 6S Plus con una cámara dual de 12 MP que permite realizar diferentes efectos de profundidad de campo, e incorpora un zoom óptico 2X y hasta 10x de zoom digital. Sigue conservando la pantalla de 5.5 pulgadas pero mejorada en su gama de colores. El iPhone 7 cuenta con un procesador A10 Fusion de Apple más veloz y de cuatro núcleos, que permite un mejor rendimiento de batería, un botón de inicio 3D Touch, y es resistente al agua. Su cámara frontal ha sido mejorada a una de 7 MP con captura de video Full HD.',
            'cantidad' => 8,
            'marca_id' => 9,
            'categoria_id' => 1 ,
           
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy J6+ 32 GB Negro 3 GB RAM", 
            'precio' =>  69999,
            'imagen' => "J6_Plus_Black_Front.png",
            'imagenes' =>'["J6_Plus_Black_Side.png","J6_Plus_Black_Back.png","J6_Plus_Black_Front.png"]',
            'descripcion' => 'El Samsung Galaxy J6+ cuenta con una pantalla HD+ de 6 pulgadas, procesador Snapdragon 425 con 3GB o 4GB de RAM y 32GB o 64GB de almacenamiento interno, cámara principal dual de 13 MP + 5 MP, cámara frontal de 8 MP, lector de huellas de costado, batería de 3300 mAh y corre Android 8.1 Oreo.',
            'cantidad' => 10,
            'marca_id' => 1,
            'categoria_id' => 1 ,
           
            
        ]);

        
        Producto::create([
            'modelo' => "Tablet lenovo M8 HD (2da generación)", 
            'precio' =>  14599,
            'imagen' => "lenovo-tab-m8-hd-83602-g.jpg",
            'imagenes' =>'["lenovo-tab-m8-hd-84257-g.jpg","lenovo-tab-m8-hd-84260-g.jpg","lenovo-tab-m8-hd-83602-g.jpg"]',
            'descripcion' => 'Lenovo Tab M8 (HD) cuenta con sistemas GSM , HSPA , LTE. La fecha de presentación es Septiembre 2019. Sistema operativo instalado es Android 9.0 (Pie) y se utilizó el procesador Quad-core 2.0 GHz Cortex-A53 y tiene 32GB 3GB de memoria RAM. Lenovo Tab M8 (HD) tiene incorporado 16GB 2GB RAM de memoria para datos (fotos, música, vídeo, etc.). Lenovo Tab M8 (HD) está equipado con un chipset Mediatek MT6761 Helio A22 (12 nm). El tamaño de la pantalla principal es de displaysize8.0 pulgadas, 185.6 cm2 con la resolución 800 x 1280 píxeles, 16:10 ratio . El número de píxeles por una pulgada (ppi) es de aproximadamente 189 ppi density). La pantalla ocupa alrededor de 76.5% de la superficie total del dispositivo. Este porcentaje de la superficie total del dispositivo a pantalla es una puntuación muy alta. También conocido como Lenovo Tab M8 (2nd Gen) Versiones: Wi-Fi/LTE',
            'cantidad' => 20,
            'marca_id' => 11,
            'categoria_id' => 2 ,
          
          
        ]);
        Producto::create([
            'modelo' => "LG K Series K50 32 GB Aurora black 3 GB RAM", 
            'precio' =>  14999,
            'oferta' => 4,
            'imagen' => "lg_k50-cuca_proteccion_pantalla.png",
            'imagenes' =>'["lg_k50-atras.png","lg_k50-rotada.png","lg_k50-cuca_proteccion_pantalla.png"]',
            'descripcion' => 'El LG K50 es un smartphone Android con una pantalla HD+ de 6.26 pulgadas. Potenciado por un procesador de ocho núcleos corriendo a 2GHz, el LG K50 tiene 3GB de RAM y 32GB de almacenamiento, una cámara principal dual de 13 MP + 2 MP, cámara frontal de 13 MP, sonido DTS:X, lector de huellas en su posterior, batería de 3500 mAh, y resistencia de grado militar, corriendo Android 9.0 Pie.',
            'cantidad' => 8,
            'marca_id' => 6,
            'categoria_id' => 1 ,
         
            
        ]);

        Producto::create([
            'modelo' => "Motorola Moto G8 Power 4g 64gb Libre Garantía", 
            'precio' =>  22499,
            'imagen' => "moto-g8-power-frente_2_12 (1).png",
            'imagenes' =>'["motorola_moto_g8_power_gris-atras.png","motorola_moto_g8_power_gris-perfil.png","moto-g8-power-frente_2_12 (1).png"]',
            'descripcion' => 'El Motorola Moto G8 Power es una variante de la serie Moto G con cámara cuádruple y batería de 5000 mAh. Con una pantalla de 6.4 pulgadas a resolución Full HD+, el Moto G8 Power está potenciado por un procesador Snapdragon 665 con 4GB de memoria RAM y 64GB de almacenamiento interno. La cámara del Moto G8 Power tiene cuatro lentes de 16 MP + 8 MP + 8 MP + 2 MP, mientras que su cámara para selfies es de 16 megapixels. El Moto G8 Power tiene una batería de 5000 mAh con soporte para carga rápida, lector de huellas en su posterior, parlantes stereo y corre Android 10.',
            'cantidad' => 10,
            'marca_id' => 2,
            'categoria_id' => 1 ,
          
           
        ]);

        Producto::create([
            'modelo' => "Motorola One Hyper 128 GB Deepsea blue 4 GB RAM", 
            'precio' =>  39999,
            'imagen' => "motorola_one_hyper_azul.png",
            'imagenes' =>'["motorola_one_hyper_azul-atras.png","motorola_one_hyper_azul-combinada.png","motorola_one_hyper_azul.png"]',
            'descripcion' => 'El Motorola One Hyper es un smartphone Android con una pantalla Full HD+ de 6.5 pulgadas. Potenciado por un procesador Snapdragon 675 con 4GB de memoria RAM y 128GB de almacenamiento interno, el Motorola One Hyper tiene una cámara frontal periscópica de 32 MP, mientras que su cámara principal es dual de 64 MP + 8 MP. Completando las características del Motorola One Hyper encontramos una batería de 4000 mAh con soporte para carga rápida, lector de huellas en su posterior, puerto USB-C y corre Android 10 bajo el programa Android One de actualizaciones aseguradas.',
            'cantidad' => 8,
            'marca_id' => 2,
            'categoria_id' => 1 ,
       
            
        ]);

        Producto::create([
            'modelo' => "Motorola One Macro Dual SIM 64 GB Space blue 4 GB RAM", 
            'precio' =>  19299,
            'imagen' => "motorola_one_macro_azul.png",
            'imagenes' =>'["motorola_one_macro_azul-atras.png","motorola_one_macro_azul-perfil.png","motorola_one_macro_azul.png"]',
            'descripcion' => 'El Motorola One Macro es otro miembro de la serie One de Motorola, con una pantalla HD+ de 6.2 pulgadas y potenciado por un procesador Mediatek Helio P70 acompañado de 4GB de memoria RAM y 64GB de almacenamiento interno expandible vía microSD. Con una cámara triple de 13 MP + 2 MP + 2 MP en su posterior, el Motorola One Macro tiene una cámara para selfies de 8 MP y la energía es provista por una batería de 4000 mAh con carga rápida. El Motorola One Macro completa sus características con un lector de huellas capacitivo en su parte posterior, puerto USB-C, resistencia a salpicaduras y Android 9.0 Pie.',
            'cantidad' => 19,
            'marca_id' => 2,
            'categoria_id' => 1 ,
           
            
        ]);

        Producto::create([
            'modelo' => "Motorola One Vision 128 GB Bronce 4 GB RAM", 
            'precio' =>  29499,
            'imagen' => "motorola_one_vision_azul.png",
            'imagenes' =>'["motorola_one_vision_marron-atras.png","motorola_one_vision_marron-perfil.png","motorola_one_vision_azul.png"]',
            'descripcion' => 'El Motorola One Vision es el nuevo miembro de la serie One de Motorola. Con una pantalla Full HD+ de 6.3 pulgadas con un agujero para cámara frontal, el Motorola One Vision está potenciado por un procesador Samsung Exynos 9609 de ocho núcleos acompañado de 4GB de memoria RAM y 128GB de almacenamiento interno expandible. La cámara principal del One Vision es dual, de 48 MP + 5 MP, mientras que su cámara para selfies es de 25 MP. El Motorola One Vision completa sus características con una batería de 3500 mAh de carga rápida TurboPower que provee hasta 7 horas con 15 minutos de carga, puerto USB-C, sonido Dolby Atmos, y resistencia a salpicaduras. Como parte del programa Android One, el Motorola One Vision corre Android 9.0 Pie y recibirá actualizaciones de Android directamente de Google.',
            'cantidad' => 4,
            'marca_id' => 2,
            'categoria_id' => 1 ,
           
            
        ]);

        Producto::create([
            'modelo' => "Motorola One Zoom 128 GB Gris eléctrico 4 GB RAM", 
            'precio' =>  44999,
            'imagen' => "moto_one_zoom_frente_2.png",
            'imagenes' =>'["motorola_one_zoom-atras.png","motorola_one_zoom-rotada.png","moto_one_zoom_frente_2.png"]',
            'descripcion' => 'El Motorola One Zoom es un smartphone Android con una pantalla OLED Full HD+ de 6.4 pulgadas. Potenciado por un procesador Snapdragon 675, el Motorola One Zoom tiene 4GB de memoria RAM y 128GB de almacenamiento interno expandible vía microSD. El punto más fuerte del Motorola One Zoom es su cámara trasera cuádruple de 48 MP + 8 MP + 16 MP + 5 MP, mientras que su cámara selfie es de 25 MP. Completando las características del One Zoom encontramos un lector de huellas integrado en pantalla, batería de 4000 mAh con carga rápida, resistencia al polvo y agua y Android 9.0 Pie.',
            'cantidad' => 7,
            'marca_id' => 2,
            'categoria_id' => 1 ,
            
          
        ]);

        Producto::create([
            'modelo' => "Nokia 3.1 Plus 32gb 3gb Ram + Lector Huellas", 
            'precio' =>  15999,
            'imagen' => "nokia_3.1_plus_azul-frente.png",
            'imagenes' =>'["nokia_3.1_plus_azul-atras.png","nokia_3.1_plus_azul-perfil.png","nokia_3.1_plus_azul-frente.png"]',
            'descripcion' => 'El Nokia 3.1 Plus mejora al Nokia 3.1 con una pantalla HD+ de 6 pulgadas, procesador Helio P22 octa-core con 3GB de RAM y 32GB de almacenamiento o 2GB de RAM y 16GB de almacenamiento, cámara principal dual de 13 MP + 5 MP, cámara frontal de 8 MP, radio FM, batería de 3500 mAh y corre Android 8.1 Oreo bajo el programa Android One.',
            'cantidad' => 9,
            'marca_id' => 10,
            'categoria_id' => 1 ,
           
           
        ]);

        Producto::create([
            'modelo' => "Oppo A9 2020 6.5 HD+ 4G Dual SIM 128 GBPúrpura Espacial", 
            'precio' =>  32999,
            'imagen' => "oppo-a9-2020-83758-g.jpg",
            'imagenes' =>'["oppo-a9-2020-83756-g.jpg","oppo-a9-2020-83757-g.jpg","oppo-a9-2020-83758-g.jpg"]',
            'descripcion' => 'El Oppo A9 (2020) es una actualización del Oppo A9, que llega con una pantalla HD+ de 6.5 pulgadas. Potenciado por un procesador Snapdragon 665, el Oppo A9 2020 cuenta con variantes de 4GB o 8GB de memoria RAM, y 128GB de almacenamiento para ambos casos, expandible vía microSD. La cámara posterior del Oppo A9 (2020) es cuádruple, de 48 MP + 8 MP + 2 MP + 2 MP, mientras que la cámara frontal para selfies es de 16 megapixels. Completando las características del Oppo A9 2020 encontramos sonido HiFi potenciado por Dolby Atmos, lector de huellas, batería de 5000 mAh, parlantes stereo y radio FM, corriendo ColorOS 6.0.1 basado en Android 9.',
            'cantidad' => 10,
            'marca_id' => 5,
            'categoria_id' => 1 ,
           
           
        ]);

        Producto::create([
            'modelo' => "Oppo Find pro X2 256gb/8gbPúrpura Espacial", 
            'precio' =>  102999,
            'oferta' => 18,
            'imagen' => "oppo-find-x2-pro-86009-g.jpg",
            'imagenes' =>'["oppo-find-x2-pro-86010-g.jpg","oppo-find-x2-pro-86149-g.jpg","oppo-find-x2-pro-86009-g.jpg"]',
            'descripcion' => 'El Oppo Find X2 Pro es la variante más avanzada de la segunda generación de la serie Find X de Oppo. Conservando la pantalla AMOLED QHD+ de 6.7 pulgadas y el procesador Snapdragon 865 con 12GB de memoria RAM, el Find X2 Pro cuenta con 512GB de espacio de almacenamiento interno no expandible, una cámara posterior de con lentes de 48 MP wide, 48 MP ultrawide y periscópico de 13 MP, con estabilización óptica de imagen y zoom híbrido de hasta 10x, mientras que su cámara para selfies es de 32 megapixels. El Oppo Find X2 Pro completa sus características con una batería de 4260 mAh con carga ultra rápida SuperVOOC, parlantes stereo, lector de huellas bajo pantalla, pantalla con tasa de refresco de 120Hz y protegida por Gorilla Glass 6, ColorOS 7.1 basado en Android 10 y versiones en cerámica, símil cuero y una edición especial Lamborghini.',
            'cantidad' => 7,
            'marca_id' => 5,
            'categoria_id' => 1 ,
          
           
        ]);

        Producto::create([
            'modelo' => "Samsung S8 64gb 4gb Púrpura Espacial", 
            'precio' =>  27999,
            'imagen' => "S8_Black_frente.jpg",
            'imagenes' =>'["S8_Black_dorso.jpg","S8_Black_costado.png","S8_Black_frente.jpg"]',
            'descripcion' => 'El Samsung Galaxy S8 es el nuevo flagship de Samsung que apuesta fuerte en un frente sin bordes de pantalla. Entre sus características se destaca la pantalla Infinity Super AMOLED dual-edge de 5.8 pulgadas y resolución QHD+, procesador Snapdragon 835 o Exynos 8895, 4GB de RAM, 64GB de almacenamiento interno, resistencia al agua IP68, carga inalámbrica, cámara Dual Pixel de 12 megapixels, cámara frontal de 8 megapixels, lector de huellas dactilares, lector de iris y Android 7.0 Nougat.',
            'cantidad' => 12,
            'marca_id' => 1,
            'categoria_id' => 1 ,
            
           
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy S9 64 4gb", 
            'precio' =>  34999,
            'imagen' => "S9_Gray_Front.png",
            'imagenes' =>'["S9_Gray_Back.png","S9_Gray_Side.png","S9_Gray_Front.png"]',
            'descripcion' => 'El Samsung Galaxy S9 es el nuevo flagship de la serie Galaxy S para el 2018, conservando mucho del diseño del Galaxy S8. El Galaxy S9 cuenta con una pantalla de 5.8 pulgadas a 1440 x 2960 pixels de resolución, procesador Snapdragon 845 o Exynos 9810, 4GB de RAM, 64GB de almacenamiento, cámara principal de 12 MP, cámara frontal de 8 MP, batería de 3000 mAh y Android 8.0 Oreo.',
            'cantidad' => 7,
            'marca_id' => 1,
            'categoria_id' => 1 ,
           
            
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy S9+ Purple 64 GB Morado lila 6 GB RAM", 
            'precio' =>  43899,
            'imagen' => "samsung-s9-purple-frente.png",
            'imagenes' =>'["samsung-s9-purple-lado.png","samsung-s9-purple-frente.png","samsung-s9-purple-dorso.png"]',
            'descripcion' => 'El Samsung Galaxy S9+ incorpora en esta generación una cámara dual de 12 MP, manteniendo la pantalla de 6.2 pulgadas QHD+ con bordes dual-edge. Potenciado por un procesador Snapdragon 845 o Exynos 9810 dependiendo del mercado, el Galaxy S9+ cuenta con 6GB de RAM y 64GB o 128GB de almacenamiento, batería de 3500 mAh, resistencia al agua IP68, e incluye variedad de sensores como lector de huellas y de iris, lector de ritmo cardíaco, barómetro y correrá Android 8.0 Oreo',
            'cantidad' => 9,
            'marca_id' => 1,
            'categoria_id' => 1 ,
            
           
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy S10e 128 GB Blue prisma 6 GB RAM", 
            'precio' =>  67999,
            'imagen' => "S10E-Blue-front.png",
            'imagenes' =>'["S10E-Blue-back.png","S10E-Blue-Side.png","S10E-Blue-front.png"]',
            'descripcion' => 'El Samsung Galaxy S10e es el smartphone más básico de la nueva serie Galaxy S10. De más pequeño tamaño, el Galaxy S10e cuenta con una pantalla AMOLED de 5.8 pulgadas a resolución Full HD+ y está potenciado por el mismo procesador Exynos 9820 o Snapdragon 855 con 6GB de RAM y 128GB de almacenamiento o bien 8GB de RAM con 256GB de almacenamiento interno. La cámara principal del Galaxy S10e es dual, con un arreglo de 12 MP + 16 MP, mientras que la cámara para selfies es de 10 MP. Con una batería de 3100 mAh, el Galaxy S10e tiene puerto USB-C, certificación IP68 para resistencia al agua, sonido Dolby y parlantes optimizados por AKG y carga inalámbrica, lector de huellas de lado y corre Android 9.0 Pie con la interfaz One UI.',
            'cantidad' => 6,
            'marca_id' => 1,
            'categoria_id' => 1 ,
          
        
        ]);

     

        Producto::create([
            'modelo' => "Samsung Galaxy A30s 64 GB Prism crush black 4 GB RAM", 
            'precio' =>  23999,
            'imagen' => "samsung_a30s_negro_lifestyle_.png",
            'imagenes' =>'["samsung_galaxy_a30s_negro-perfil.png","samsung_galaxy_a30s_negro-atras.png","samsung_a30s_negro_lifestyle_.png"]',
            'descripcion' => 'El Samsung Galaxy A30s cuenta con una pantalla HD+ de 6.4 pulgadas. Potenciado por un procesador Exynos 7885 de ocho núcleos, el Galaxy A30s está disponible en variantes de 3GB de memoria RAM y 32GB de almacenamiento, o bien 4GB de memoria RAM con 64GB o 128GB de almacenamiento interno, en todos los casos expandible vía microSD. Con una cámara triple de 25 MP + 8 MP + 5 MP en su parte posterior, el Galaxy A30s tiene una cámara para selfies de 16 MP, y completa sus características con una batería de 4000 mAh con carga rápida, puerto USB-C, lector de huellas óptico bajo pantalla, y corre Android 9.0 Pie.',
            'cantidad' => 8,
            'marca_id' => 1,
            'categoria_id' => 1 ,
          
         
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy A80 128 GB Phantom black 8 GB RAM", 
            'precio' =>  62999,
            'imagen' => "samsung_a80_con_cargador_portatil_1.png",
            'imagenes' =>'["samsung_galaxy_a80_negro-atras_2.png","samsung_galaxy_a80_negro-perfil_2.png","samsung_a80_con_cargador_portatil_1.png"]',
            'descripcion' => 'El Samsung Galaxy A80 es un nuevo integrante de la renovada serie Galaxy A de Samsung. El Galaxy A80 llega con una cámara pop-up motorizada que revela tres sensores: 48 MP + 8 MP + TOF 3D. Esta cámara además es rotativa y funciona también como cámara para selfies frontal. Con una pantalla Super AMOLED de 6.7 pulgadas a resolución Full HD+, el Galaxy A80 cuenta con un procesador octa-core a 2.2GHz, acompañado de 8GB de memoria RAM y 128GB de almacenamiento interno no expandible. El Samsung Galaxy A80 completa sus características con una batería de 3700 mAh de carga rápida, lector de huellas embebido en pantalla, y Android 9.0 Pie a bordo.',
            'cantidad' => 14,
            'marca_id' => 1,
            'categoria_id' => 1 ,
          
            
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy A10 32 GB Negro 2 GB RAM", 
            'precio' =>  15499,
            'imagen' => "samsung_galaxy_a10_negro_5.png",
            'imagenes' =>'["samsung_galaxy_a10_negro-atras.png","samsung_galaxy_a10_negro-rotada_3.png","samsung_galaxy_a10_negro_5.png"]',
            'descripcion' => 'El Samsung Galaxy A10 se suma al Galaxy A30 y A50 con una pantalla HD+ de 6.2 pulgadas Infinity-V, es decir con notch en forma de gota de agua. Potenciado por un procesador Exynos 7884 de ocho núcleos, el Galaxy A10 cuenta con 2GB de memoria RAM y 32GB de almacenamiento interno expandible. En cuanto a cámaras, el Galaxy A10 tiene una cámara posterior de 13 MP, mientras que su cámara frontal para selfies es de 5 MP, que también funciona para desbloquearlo mediante reconocimiento facial. El Galaxy A10 completa sus características con una batería de 3400 mAh, y Android 9.0 Pie con One UI.',
            'cantidad' => 18,
            'marca_id' => 1,
            'categoria_id' => 1 ,
          
          
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy J2 Core 8 GB Negro 1 GB RAM", 
            'precio' =>   8999,
            'imagen' => "samsung_galaxy_j2_core-negro.png",
            'imagenes' =>'["samsung_galaxy_j2_core-negro-atras.png","samsung_galaxy_j2_core-negro-perfil.png","samsung_galaxy_j2_core-negro.png"]',
            'descripcion' => 'El Samsung Galaxy J2 Core es el primer smartphone de Samsung con la distribución Go Edition de Android Oreo. Se trata de un básico smartphone con pantalla qHD de 5 pulgadas, procesador quad-core Exynos con 1GB de RAM y 8GB de almacenamiento interno, cámara principal de 8 megapixels con flash LED, cámara frontal de 5 megapixels, y batería de 2600 mAh',
            'cantidad' => 10,
            'marca_id' => 1,
            'categoria_id' => 1 ,
           
         
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy M10 16 GB Negro carbón 2 GB RAM", 
            'precio' =>   10199,
            'imagen' => "samsung_m10_gris.png",
            'imagenes' =>'["samsung_m10_azul-atras.png","samsung_m10_azul-perfil.png","samsung_m10_gris.png"]',
            'descripcion' => 'El Samsung Galaxy M10 es parte de la nueva serie Galaxy M de smartphones económicos de Samsung. Con una pantalla HD+ de 6.22 pulgadas, el Galaxy M10 está potenciado por un procesador Exynos 7870 de ocho núcleos acompañado de 2GB o 3GB de RAM, con 16GB o 32GB de almacenamiento interno, respectivamente. La cámara principal del Galaxy M10 es dual, en configuración 13 MP + 5 MP con apertura f/1.9. La cámara para selfies es de 5 MP y completa sus características con una batería de 3400 mAh y Android 8.1 Oreo con la interfaz Samsung Experience 9.5.',
            'cantidad' => 11,
            'marca_id' => 1,
            'categoria_id' => 1 ,
          
           
        ]);


        Producto::create([
            'modelo' => "Samsung Galaxy A71 128gb Black - Silver Dual Sim", 
            'precio' =>  59999,
            'imagen' => "samsung-galaxy-a71-85051-g.jpg",
            'imagenes' =>'["samsung-galaxy-a71-85052-g.jpg","samsung-galaxy-a71-85054-g.jpg","samsung-galaxy-a71-85051-g.jpg"]',
            'descripcion' => 'El Samsung Galaxy A71 llega para suceder al Galaxy A70 con una pantalla Super AMOLED de 6.7 pulgadas a resolución FHD+. Utilizando un procesador Snapdragon 730 de ocho núcleos, el Galaxy A71 cuenta con variantes de 6GB o 8GB de memoria RAM con 128GB de espacio de almacenamiento interno expandible microSD. La cámara principal del Galaxy A51 es cuádruple, de 64 MP + 12 MP + 5 MP + 5 MP, mientras que su cámara para selfies es de 32 MP. El Galaxy A71 completa sus características con una generosa batería de 4500 mAh de carga rápida, lector de huellas óptico integrado en la pantalla, protección Gorilla Glass 3 y corre One UI basado en Android 9.0 Pie.',
            'cantidad' => 16,
            'marca_id' => 1,
            'categoria_id' => 1 ,
            
        ]);


        Producto::create([
            'modelo' => "Samsung Galaxy S20+ 128gb", 
            'precio' =>  121999,
            'imagen' => "samsung-galaxy-s20-1.jpg",
            'imagenes' =>'["samsung-galaxy-s20-plus-1.jpg","samsung-galaxy-s20-plus-2.jpg","samsung-galaxy-s20-1.jpg"]',
            'descripcion' => 'El Samsung Galaxy S20 Ultra es el miembro más poderoso de la nueva serie Galaxy S20. Con una enorme pantalla QHD+ Dynamic AMOLED 2X de 6.9 pulgadas, el Galaxy S20 Ultra utiliza un procesador Snapdragon 865 en su variante para USA y un Exynos 990 para la variante del resto del mundo, acompañados de 12GB de memoria RAM con 128GB o 256GB de almacenamiento o bien 16GB de memoria RAM con 512GB de almacenamiento. La cámara principal del Galaxy S20 Ultra consta de tres lentes de 108 MP + 48 MP + 12 MP más un sensor TOF 3D, y la cámara frontal es de 40 megapixels. El Galaxy S20 Ultra completa sus características con parlantes stereo optimizados por AKG, batería de 5000 mAh con soporte para carga ultra rápida, carga inalámbrica, conectividad 5G y corre One UI 2 basado en Android 10.',
            'cantidad' => 8,
            'marca_id' => 1,
            'categoria_id' => 1 ,
           
           
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy Tab S6 10.5 256 Gb Gris", 
            'precio' =>   130999,
            'imagen' => "samsung-galaxy-tab-s6-83072-g.jpg",
            'imagenes' =>'["samsung-galaxy-tab-s6-83073-g.jpg","samsung-galaxy-tab-s6-83072-g.jpg"]',
            'descripcion' => 'El Samsung Galaxy Tab S6 es el nuevo tablet Android insignia de Samsung para el 2019. Con una pantalla de 10.5 pulgadas a 1600 x 2560 pixels de resolución, el Galaxy Tab S6 está potenciado por un procesador Snapdragon 855 con opciones disponibles de 8GB de memoria RAM y 256GB de almacenamiento o bien 6GB de memoria RAM con 128GB de almacenamiento interno, en ambos casos expandible. Con una cámara dual de 13 MP + 5 MP en su posterior, el Galaxy Tab S6 tiene una cámara frontal de 8 MP, cuatro parlantes stereo optimizados por AKG, lector de huellas integrado en pantalla, batería de 7040 mAh con carga rápida, soporte para stylus con Bluetooth y corre Android 9.0 Pie con la interfaz de usuario One UI.',
            'cantidad' => 6,
            'marca_id' => 1,
            'categoria_id' => 2 ,
         
           
        ]);

        Producto::create([
            'modelo' => "Sony Xperia 1 Dual SIM 128 GB Gris 6 GB RAM", 
            'precio' =>   120999,
            'oferta' => 12,
            'imagen' => "sony-xperia-1-ii-85849-g.jpg",
            'imagenes' =>'["sony-xperia-1-ii-85850-g.jpg","sony-xperia-1-ii-86061-g.jpg","sony-xperia-1-ii-85849-g.jpg"]',
            'descripcion' => 'El Sony Xperia 1 es el nuevo flagship de Sony para el 2019. El Xperia 1 cuenta con una pantalla 4K OLED de 6.5 pulgadas y está potenciado por un procesador Snapdragon 855 de ocho núcleos con 6GB de RAM y 64GB o 128GB de almacenamiento interno. La cámara principal del Xperia 1 es triple, en configuración 12 MP + 12 MP + 12 MP, con estabilización óptica de imagen, zoom óptico, y video UHD, mientras que su cámara frontal es de 8 MP, estabilizada por EIS. El Xperia 1 completa sus características técnicas con parlantes stereo, puerto USB-C, sonido HiFi y Dolby, batería de 3300 mAh con carga rápida, carga inalámbrica, y Android 9.0 Pie a bordo.',
            'cantidad' => 12,
            'marca_id' => 7,
            'categoria_id' => 1 ,
          
          
        ]);

        Producto::create([
            'modelo' => "Xiaomi Mi 9T Dual SIM 64 GB Azul glaciar 6 GB RAM", 
            'precio' =>   39500,
            'oferta' => 8,
            'imagen' => "XIAOMI-MI9t.jpg",
            'imagenes' =>'["XIAOMI-MI9t-2.jpg","XIAOMI-MI9t-3.jpg","XIAOMI-MI9t.jpg"]',
            'descripcion' => 'El Xiaomi Mi 9T es una variante del Mi 9 con una pantalla Full HD+ de 6.39 pulgadas. Con un procesador Snapdragon 730 de ocho núcleos, el Xiaomi Mi 9T tiene 6GB de memoria RAM con opciones de 64GB o 128GB de almacenamiento interno no expandible. La cámara principal del Xiaomi Mi 9T es triple, en configuración 48 MP + 8 MP + 13 MP, mientras que su cámara para selfies es de 20 MP y asoma en el frente mediante un mecanismo motorizado. El Xiaomi Mi 9T completa sus características con lector de huellas integrado en la pantalla, batería de 4000 mAh con carga rápida, audio HiFi, y corre MIUI 10 basado en Android 9.0 Pie.',
            'cantidad' => 12,
            'marca_id' => 4,
            'categoria_id' => 1 ,
         
           
        ]);

        Producto::create([
            'modelo' => "Tablet Xiaomi Mi Pad 4 WiFi Edition 8 64GB black con memoria RAM 4GB", 
            'precio' =>   29499,
            'imagen' => "xiaomi-mi-pad-4-74881-g.jpg",
            'imagenes' =>'["xiaomi-mi-pad-4-74882-g.jpg","xiaomi-mi-pad-4-74883-g.jpg","xiaomi-mi-pad-4-74881-g.jpg"]',
            'descripcion' => 'El Xiaomi Mi Pad 4 es un tablet Android con una pantalla Full HD de 8 pulgadas, procesador Snapdragon 660 con 3GB de RAM y 32GB de almacenamiento en su versión solo Wi-Fi o 4GB de RAM y 64GB de almacenamiento en su versión LTE, cámaras de 13 MP y 5 MP, puerto USB-C y batería de 6000 mAh.',
            'cantidad' => 7,
            'marca_id' => 4,
            'categoria_id' => 2 ,
           
            
        ]);

        Producto::create([
            'modelo' => "Xiaomi Mi Note 10 Dual SIM 128 GB Negro medianoche 6 GB RAM", 
            'precio' =>   57375,
            'oferta' => 10,
            'imagen' => "xiaominote10-462x462.jpg",
            'imagenes' =>'["xiaominote10-1-462x462.jpg","xiaominote10-2.jpg","xiaominote10-462x462.jpg"]',
            'descripcion' => 'El Xiaomi Mi Note 10 es la variante para Occidente del Xiaomi Mi CC9 Pro lanzado en China con una cámara de cinco sensores, siendo el principal de 108 megapixels. El Xiaomi Mi Note 10 cuenta con una pantalla Super AMOLED Full HD+ de 6.47 pulgadas y está potenciado por un procesador Snapdragon 730G con 6GB de memoria RAM y 128GB de almacenamiento interno no expandible. Su cámara principal es de 108 MP + 12 MP + 20 MP + 5 MP + 2 MP, mientras que su cámara para selfies es de 32 MP, alojada en el frente con un notch. Completando las características del Xiaomi Mi Note 10 encontramos una batería de 5260 mAh con carga rápida de 30W, puerto USB-C, sonido HiFi, lector de huellas integrado bajo la pantalla y MIUI 11 basado en Android 9.0 Pie.',
            'cantidad' => 12,
            'marca_id' => 4,
            'categoria_id' => 1 ,
          
           
        ]);

        Producto::create([
            'modelo' => "Xiaomi Mi Note 10 Pro 256/8gb Ram 108mpx Bateria5260", 
            'precio' =>   74999,
            'oferta' => 14,
            'imagen' => "xiaominote10pro.jpg",
            'imagenes' =>'["xiaominote10pro-2.jpg","xiaominote10pro-4-462x462.jpg","xiaominote10pro.jpg"]',
            'descripcion' => 'El Xiaomi Mi Note 10 Pro tiene dos pequeñas diferencias con el Mi Note 10. Una de ellas es que su lente principal de la cámara de fotos es de 8 partes en lugar de 7, dando una ventaja extra en captura de luz para sacar fotografías y la segunda es 8GB de memoria RAM con 256GB de almacenamiento . El resto de las características del Xiaomi Mi Note 10 Pro se mantienen idénticas, incluyendo la pantalla Full HD+ Super AMOLED de 6.47 pulgadas, el procesador Snapdragon 730G de ocho núcleos, la cámara principal de sensores de 108 MP, 5 MP, 12 MP, 20 MP y 2 MP, la cámara para selfies de 32 MP, la batería de 5260 mAh con soporte de carga rápida, lector de huellas integrado en la pantalla, sonido HiFi y corriendo MIUI 11 basado en Android 9.0 Pie.',
            'cantidad' => 10,
            'marca_id' => 4,
            'categoria_id' => 1 ,
           
           
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy Z Flip", 
            'precio' =>  129999,
            'imagen' => "70008241.jpg",
            'imagenes' =>'["70008241_3.jpg","70008241_2.jpg","70008241.jpg"]',
            'descripcion' => 'El Samsung Galaxy Z Flip es el segundo smartphone plegable de Samsung. Al estar abierto, el Galaxy Z Flip cuenta con una pantalla Full HD+ de 6.7 pulgadas, y al estar cerrado muestra una pantalla Super AMOLED de 1.1 pulgadas para notificaciones. Potenciado por un procesador Snapdragon 855+, el Galaxy Z Flip cuenta con 8GB de memoria RAM con 256GB de almacenamiento interno no expandible. La cámara principal del Galaxy Z Flip es dual, con dos lentes de 12 megapixels, mientras que la cámara para selfies es de 10 MP. La batería del Galaxy Z Flip es dual y en total cuenta con una capacidad de 3300 mAh y soporta carga rápida e inalámbrica. El Galaxy Z Flip completa sus características con unos parlantes stereo, lector de huellas montado de costado y corre One UI 2 basado en Android 10.',
            'cantidad' => 4,
            'marca_id' => 1,
            'categoria_id' => 1,
            
        ]);

        Producto::create([
            'modelo' => "LG Q60", 
            'precio' =>  23399,
            'imagen' => "70007698.jpg",
            'imagenes' =>'["70007698_2.jpg","70007698_3.jpg","70007698.jpg"]',
            'descripcion' => ' LG Q60 Eles uno de los primeros smartphones en contar con una cámara triple en el segmento de gama media. Con una pantalla HD+ de 6.26 pulgadas, el LG Q60 cuenta con un procesador octa-core a 2GHz con 3GB de RAM y 64GB de almacenamiento interno expandible. Su cámara triple tiene una configuración 16 MP + 5 MP + 2 MP, permitiendo capturar fotos con profundidad de campo y gran angular. Con resistencia de grado militar, el LG Q60 completa sus características con lector de huellas posterior, sonido DTS:X, cámara para selfies de 13 MP, y una batería de 3500 mAh, corriendo Android 9.0 Pie',
            'cantidad' => 8,
            'marca_id' => 6,
            'categoria_id' => 1 ,

        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy S10+ Negro", 
            'precio' =>  67999,
            'imagen' => "samsung_galaxy_s10_negro-_cucarda_funda_1_1.png",
            'imagenes' =>'["samsung_galaxy_s10_negro-atras_2.png","samsung_galaxy_s10_negro-perfil.png","samsung_galaxy_s10_negro-_cucarda_funda_1_1.png"]',
            'descripcion' => 'El Samsung Galaxy S10+ es el más poderoso de la serie Galaxy S10. Con una pantalla AMOLED QHD+ de 6.4 pulgadas, el Galaxy S10+ está potenciado por el procesador Exynos 9820 octa-core o Snapdragon 855, con opciones de 6GB o 12GB de RAM y 128GB, 512GB o 1TB de almacenamiento. La cámara triple del Galaxy S10+ tiene la misma configuración de 12 MP + 12 MP + 16 MP de su hermano menor el S10, incluyendo zoom, OIS, lente wide y PDAF dual pero su cámara para selfies es dual, de 10 MP + 8 MP. Con una batería de 4100 mAh con carga rápida inalámbrica que puede a su vez cargar otros dispositivos, el Galaxy S10+ tiene lector de huellas bajo pantalla, puerto USB-C, parlantes stereo, sonido Dolby, optimizaciones AKG y corre One UI basado en Android 9.0 Pie. El Galaxy S10+ también debuta con su versión cerámica en blanco o negro.',
            'cantidad' => 6,
            'marca_id' => 1,
            'categoria_id' => 1,
            
        ]);

        Producto::create([
            'modelo' => "Samsung Galaxy Note 10 Rosa", 
            'precio' =>  85999,
            'imagen' => "samsung_note_10_-frente_lifestyle_3.png",
            'imagenes' =>'["samsung_galaxy_note_10_rosa-atras_2.png","samsung_galaxy_note_10_rosa-perfil_2.png","samsung_note_10_-frente_lifestyle_3.png"]',
            'descripcion' => 'El Samsung Galaxy Note 10 es la variante normal de la serie Galaxy Note 10, con una pantalla Infinity-O Dynamic AMOLED de 6.3 pulgadas a resolución FHD+. Potenciado por un procesador Snapdragon 855+ en USA y Exynos 9825 en el resto del mundo, el Galaxy Note 10 cuenta con 8GB de memoria RAM y 256GB de espacio de almacenamiento interno no expandible. La cámara principal del Note 10 es triple, de 12 MP + 12 MP + 16MP, mientras que su cámara selfie es de 10 MP de gran angular y autofoco. El resto de las características del Samsung Galaxy Note 10 incluyen una batería de 3600 mAh con carga rápida, lector de huellas embebido en pantalla, soporte para stylus S Pen con conectividad Bluetooth, y corre Android 9.0 Pie con la interfaz One UI.',
            'cantidad' => 3,
            'marca_id' => 1,
            'categoria_id' => 1,
            
        ]);
    }
}
			