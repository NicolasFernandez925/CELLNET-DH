<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Caracteristica;
use App\Categoria;
use App\Marca;


class ShopController extends Controller
{
    public function shop(){
        $productosOrderRandom = Producto::orderProduct(16);
        $vac = $this->getData();
   
        return view('tienda')->with(['datos' => $vac ,'productosTakeOrder' => $productosOrderRandom]);
    }

    private function getData(){
        $marcas = Marca::All();
        $countProductos = Producto::All();
        $countProductos = $countProductos->count();
      
        if(request()->categoria){
            $productos = Producto::where('categoria_id',request()->id)->paginate(15);
            $productos->withPath('?categoria='.request()->categoria.'&'.'id='.request()->id);
            $countProductos = $productos->count();

        }elseif(request()->marca){
           
            $productos = Producto::where('marca_id',request()->id)->paginate(15); 
            $countProductos = $productos->count();
            $productos->withPath('?marca='.request()->marca.'&'.'id='.request()->id);
      

        }elseif(request()->ordenar == 'nombre'){
            
            $productos = Producto::orderBy('modelo')->paginate(15); 
            $productos->withPath('?ordenar='.request()->ordenar.'&'.'id='.request()->id);

        }elseif(request()->ordenar == 'precio'){

            $productos = Producto::orderBy('precio','desc')->paginate(15); 
            $productos->withPath('?ordenar='.request()->ordenar.'&'.'id='.request()->id);
        }
        else{
            $productos = Producto::inRandomOrder()->paginate(15);
            
        }

       
        return compact('productos','countProductos','marcas');
    }

    public function searchProduct(Request $request){
        $productosOrderRandom = Producto::orderProduct(16);
        
        $vac = $this->getData();
        $dato = $request->input('nombre');

        $producto = Producto::where('modelo','like','%'.$dato.'%')->paginate(20);

        $producto->withPath('?ordenar='.request()->ordenar.'&'.'id='.request()->id);

        $productos= ($vac['productos']->count() != 0) ? $producto : $vac['productos'];
    
        $countProductos = $producto->count();

        $vac['countProductos'] =  $countProductos;
    
        $vac['productos'] = $productos;
        
        return view('tienda')->with(['datos' => $vac, 'productosTakeOrder' => $productosOrderRandom]);
        
    }

}
