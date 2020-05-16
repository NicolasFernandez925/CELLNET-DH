<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class IndexController extends Controller
{
    public function index(){

        $productos = Producto::orderProduct(16);

        $productOferta = Producto::All()->where('oferta');
        
        return view('inicio')->with('productos', $productos)->with('ofertasProduct', $productOferta);
       
    }
}
