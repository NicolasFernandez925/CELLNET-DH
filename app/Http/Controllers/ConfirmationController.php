<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Producto;
use Mail;
use App\Domicilio;
use App\User;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{

    static function datosUsuario(){

      $userId = auth()->user()->id; 
      $user = Domicilio::with(['user'])->where('user_id',  $userId)->get();
     
      return $user->last();

  }

    public function confirmation(Request $request){
            
            $datosUsuario = ConfirmationController::datosUsuario();
          
            //Modifica la cantidad del producto si se efectuo la compra
            foreach(session('productosUser')[0]->productos as $producto){
  
            $OBJproducto= Producto::where('id', $producto->id)->get();
              
            $OBJproducto[0]->cantidad = ($OBJproducto[0]->cantidad - $producto->pivot->cantidad);                      
            $OBJproducto[0]->save();   
          }  

            //fecha y hora que se hizo al compra
            $date = Carbon::now()->toDateTimeString();
            $fecha = date('Y-m-d ');
            $hora = date('H:i:s');
    
            $fechaYHora = [
                'hora' =>   $hora,
                'fecha' =>  $fecha
            ];
          

            //Envio de mail si se confirmo la compra
            Mail::send('emails.factura_user', ['datosUsuario' => $datosUsuario, 'fecha' =>  $fechaYHora] ,function ($message){
                         
            $message->subject('Correo de Compra / FACTURA - CELLNET');
            $message->to('nicolasnahuel.pr@gmail.com');
  
            });

            //Borra todos los productos del usuario
            //una vez hecho el pago
            $usuarioId =  auth()->user()->id;
            $usuario =  User::find($usuarioId);
            $usuario->productos()->detach();
     
          
      return view('thankyou')->with('status', '¡ Se envío un mail con los datos de tu compra a tu casilla de correo !');
    }



    public function error(Request $request){

      
      return view('thankyou')->with('statusError', '¡ Hubo un error al procesar tu compra !');
        
    }

    
 
    public function prending(Request $request){
      
      return view('thankyou')->with('statusError', '¡ Hubo un error al procesar tu compra !');
    }
 
 
}
