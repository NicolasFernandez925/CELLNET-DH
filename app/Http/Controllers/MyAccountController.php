<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Domicilio;
use App\Orden;
use GuzzleHttp\Client;

class MyAccountController extends Controller
{
    public function myAccountShow(){
        $productosUser = '';
        $idUsuario = auth()->user()->id;

        $orden= Orden::with('productos')->where('usuario_id',$idUsuario)->get();
      
        if(!($orden->isEmpty())){
          
            $productosUser = $orden[0]->productos;
           
        }
    
        $id =  auth()->user()->id;
        $usuario = User::findOrFail($id);

        return view('micuenta',compact('usuario','productosUser'));
    }


    public function editAccount(Request $request){

       
        $id =  auth()->user()->id;
        $usuario = User::findOrFail($id);

        $validate = [
            'name' => 'string',
            'mail' => 'email',
            'apellido' => 'string',
 
        ];

        $mensajes = [
           
            'string' => 'el :attribute campo debe ser un texto',
            'email' => 'el :attribute debe ser correcto',
        ];     
        
        $this->validate($request, $validate, $mensajes);

        $usuario->name =  $request['nombre'];
        $usuario->apellido =  $request['apellido'];
        $usuario->email =  $request['email'];
       

        $usuario->save();

        return back()->with('status', 'Datos cambiados');
    }
}
