<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Redirect;

class ContactController extends Controller
{
    public function index(){

        return view('contacto');
    }


    public function sendMessage(Request $request){
        $validate = [
            'name' => 'string|max:255',
            'email' => 'required|string|max:255',
            'mensaje' => 'required|string',
 
        ];

        $mensajes = [
            'required' => 'El campo :attribute no puede estar vacio',
            'string' => 'El campo :attribute debe ser un texto',

        ];     
        
        $this->validate($request, $validate, $mensajes);

        Mail::send('emails.contact', $request->all(), function ($message) {

            $message->subject('Correo de contacto /');
            $message->to('nicolasnahuel.pr@gmail.com');

        });

        $request->session()->flash('message', 'Mensaje enviado correctamente. A la brevedad nos estaremos comunicando');
        

        return Redirect::to('/contacto');
    }
}
