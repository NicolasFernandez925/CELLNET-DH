<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Producto;
use App\Domicilio;
use App\Orden;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class ProcesarPagoController extends Controller
{
    public function procesarDatosDePago(CheckoutRequest $request){

        \MercadoPago\SDK::setAccessToken(env('MP_TEST_ACCESS_TOKEN'));

       
        $productos = [];

        $preference = new \MercadoPago\Preference();

        // Crea un ítem en la preferencia
        foreach(session('productosUser')[0]->productos as $producto){
            $presentPrice = ($producto->oferta != null)? presentPrice($producto->precio, $producto->oferta) : $producto->precio;    
            $item = new  \MercadoPago\Item();
            $item->title = $producto->modelo;
            $item->picture_url = $producto->imagen;
            $item->description = $producto->descripcion;       
            $item->quantity = $producto->pivot->cantidad;        
            $item->unit_price = $presentPrice;
            $productos[] = $item;           
            
           
        }

        
        $preference->items = $productos;
        $preference->back_urls = [

            "success" => route('confirmation'),
            "failure" => route('error'),
            "pending" =>route('prending')
        ];


        $preference->save();

            $usuarioId =  auth()->user()->id;
        
            //Agrego los datos del checkout que ingreso el usuario
            $domicilio = new Domicilio;

            $domicilio->provincia = $request['provincia'];
            $domicilio->localidad = $request['municipio'];
            $domicilio->codigo_postal = $request['codigoPostal'];
            $domicilio->tipo_dni = $request['tipo-dni'];
            $domicilio->nro_dni = $request['nro-dni'];
            $domicilio->direccion = $request['direccion'];
            $domicilio->cod_area = $request['cod-area'];
            $domicilio->telefono = $request['telefono'];
            $domicilio->nro_calle = $request['nro-calle'];
            $domicilio->user_id =  $usuarioId;
            $domicilio->save();
          


            // DATOS DEL CLIENTE 
            $date = Carbon::now()->toDateTimeString();

            $payer = new \MercadoPago\Payer();
            $payer->name = auth()->user()->name;
            $payer->surname = auth()->user()->apellido;
            $payer->email = auth()->user()->email;
            $payer->date_created = $date;
            $payer->phone = array(
                "area_code" => $domicilio->cod_area,
                "number" =>  $domicilio->telefono
            );
            
            $payer->identification = array(
                "type" =>  $domicilio->tipo_dni,
                "number" => $domicilio->nro_dni
            );
            
            $payer->address = array(
                "street_name" => $domicilio->direccion,
                "street_number" => $domicilio->nro_calle,
                "zip_code" =>  $domicilio->codigo_postal
            );
        
            $preference->payer = $payer;
            //==


            $OrdenUserDomicilio = Domicilio::where('user_id',$usuarioId)->first();
            $orden = new Orden;

            $orden->usuario_id = $usuarioId;
            $orden->cantidad = cantidadTotalProductos();
            $orden->total = totalPriceProductsUser();
            $orden->domicilio_id =  $OrdenUserDomicilio->id;
            $orden->save();

            //guardo los datos en tabla intermedia orden-productos
            $ordenFinal = Orden::where('usuario_id',$usuarioId)->first();
            foreach(session('productosUser')[0]->productos as $product){
                    $ordenFinal->productos()->attach($product->id);
            }

            

        return redirect($preference->init_point);

    }
}
