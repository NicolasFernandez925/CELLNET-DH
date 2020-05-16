<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Producto;
use App\User;
use App\ProductoUsuario;

class CartController extends Controller
{

    public function cartProductAdd(Request $request, $id = null){    
 
        if(auth()->check()){

            $cantidad = ($request->cantidad > 0) ? $request->cantidad : 1;           

            //si clickeo en añadir al carrito lo guarda en la BD
            if($id != null){
                //obtengo el producto si es que se selecciono
                $producto = Producto::find($id);
           
                //obtengo el usuario que se logueo
                $usuarioId =  auth()->user()->id;
                $usuario =  User::find($usuarioId);
              
                
                //inserto el producto al usuario
                $usuario->productos()->attach($producto->id,['cantidad'=>$cantidad, 'total' => $producto->precio]);                      
            }
                  
            $productosUser = User::with('productos')->where('id',auth()->user()->id)->get();  
          
            //total productos        
            $totalPriceProducts = CartController::subTotalPriceProduct($productosUser);   
            
            $countProductos= $productosUser[0]->productos->count();

        
            session(['countProducts' => $countProductos, 'priceTotal' => $totalPriceProducts ]);
            session(['productosUser' =>  $productosUser]);

            return view('carrito',compact('productosUser','totalPriceProducts'));
        }

        $productosUser = User::with('productos')->where('id',auth()->user()->id)->get();  
      
        //total productos        
        $totalPriceProducts = CartController::subTotalPriceProduct($productosUser);   
        
        $countProductos= $productosUser[0]->productos->count();

    
        session(['countProducts' => $countProductos, 'priceTotal' => $totalPriceProducts ]);
        session(['productosUser' =>  $productosUser]);

        return view('carrito',compact('productosUser','totalPriceProducts'));

    }

    static function subTotalPriceProduct($producto){
        $total = 0;  
        foreach($producto[0]->productos as $product){
          
            if($product->oferta != 0){         
                 $total = $total + (presentPrice($product->precio, $product->oferta) *$product->pivot->cantidad);             
            }
            else{
                $total = $total + ($product->precio * $product->pivot->cantidad);
            }      
        }    
        return  intval($total);
    }


    public function cartProductDelete($id){
        $usuarioId =  auth()->user()->id;
        $usuario =  User::find($usuarioId);

        $producto = Producto::find($id);
      
        $usuario->productos()->detach($producto->id);

        return redirect()->route('cart.show')->with('success_message','Producto borrado correctamente');       
    }


    public function cartProductEdit($id){
        
    }
}
