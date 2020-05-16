<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Http\Requests\InventoryRequest;
use Illuminate\Http\Request;

class InventoryController extends Controller
{

    public function indexInventario(){
        //verifica productos borrados =Producto::onlyTrashed()->get();
        //recupera todos los productos borrados Producto::query()->restore();
     
        $productos = Producto::paginate(10);

        return view('inventario')->with('productos', $productos);
    }

    public function ProductShowAdd(){
        
        return view('agregar_producto');
    }

    public function ProductAddInvantario(InventoryRequest $request){

       
            $producto = new Producto;

            if($request->hasfile('imagen_frontal')){
                $file = $request->file('imagen_frontal');
                $filename = time().$file->getClientOriginalName();
                $file->move(public_path('images/imagenes-productos/'),$filename);            
            }
    
          
            $producto->marca_id = $request['marca'];
            $producto->modelo = $request['modelo'];
            $producto->categoria_id = $request['categoria'];
            $producto->precio = $request['precio'];
            $producto->oferta = $request['oferta'];
            $producto->cantidad = $request['cantidad'];
            $producto->imagen =   $filename;
            $producto->imagenes = $request['imagenes_secundarias'];
            $producto->descripcion = $request['descripcion'];

            $producto->save();
               
            return redirect('/admin/inventario')->with('statusProductAdd', 'Producto cargado correctamente');
    }


    public function inventariotProductDelete($id){

        $producto = Producto::findOrFail($id)->delete();
        return back()->with('statusProductDelete', 'Producto inactivo ');
    }

    public function ProductEditInventario($id){

        $producto = Producto::findOrFail($id);
        return view('editar_producto')->with('producto',$producto);

    }

    public function productUpdateInventario(InventoryRequest $request , $id){
     

            if($request->hasfile('imagen_frontal')){
                $file = $request->file('imagen_frontal');
                $filename = time().$file->getClientOriginalName();
                $file->move(public_path('images/imagenes-productos/'),$filename);          
            }
    

            $producto = Producto::findOrFail($id);

            $producto->marca_id = $request['marca'];
            $producto->modelo = $request['modelo'];
            $producto->categoria_id = $request['categoria'];
            $producto->precio = $request['precio'];
            $producto->oferta = $request['oferta'];
            $producto->cantidad = $request['cantidad'];
            $producto->imagen =   $filename;
            $producto->imagenes = $request['imagenes_secundarias'];
            $producto->descripcion = $request['descripcion'];

    
            $producto->save();


            return redirect('/admin/inventario')->with('statusEdit', 'Producto editado correctamente');
    }
   


}
