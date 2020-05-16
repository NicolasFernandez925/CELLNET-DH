<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Caracteristica;

class ShowProductController extends Controller
{
    public function showProduct($id){
               
        $producto = Producto::with(['caracteristicas','categoria'])->findOrFail($id);	
         
        $randomProduct = Producto::orderProduct(10);

        return view('producto')->with('producto',$producto)->with('randomProduct',$randomProduct);
    }
}
