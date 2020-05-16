
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
    <style>

        body{
        font-size: 12px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
         p{
            margin: 0px!important;
            
         }
         .factura.mt-3.p-4 {
             margin-left: 45;
         }
         thead {
         
             background: #d6d6d6;
             
         }
         .table {
             margin-bottom: 135px!important;
         }
         p.subtotal,p.total {
             font-weight: bold;
         }
     
         tr{
          text-align: center;
         }
         .total {
          float: right;
          margin-right: 150px;
          margin-top: 13px;
        }

         .contenedor {
          width: 100%;
          max-width: 1500px;
          margin: 0 auto;
          border: 1px solid gray;
        }
        .original-title {
            width: 100%;
            text-align: center;
            padding: 10px 0px;
            font-size: 22px;
            border-bottom: 1px solid gray;
        }

        .datos-izq {
          margin-top: 20px;
          
        }
        .flex-datos{
          margin-left: 10px;
        }

        .contenedor-tabla {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        table.table {
            width: 100%;
        }
        th {
            padding: 13px;
          
        }

        .precio-total {
            height: 50px;
            width: 100%;
            border: 1px solid gray;
        }

        .precio-total .total p{
          color: red;
          font-weight: bold;
          font-size: 17px;
        }
        .total{
           
            width: 200px;
        }
        .datos-destino{
          margin-left: 10px;
        }

     </style>
</head>
<body>
    <div class="contenedor ">
        <div class="original-title">
            <div class="original text-center ">
                <h4 class="py-1">ORIGINAL</h4>
            </div>         
        </div>
        <div class="flex-datos">
            <div class="datos-izq">
                <p>Razón social: Tienda online / <strong>CELLNET</strong></p>
                <p>Domicilio comercial: Callao 12345</p>
                <p>Condición frente al IVA: Responsable monotributo</p>     
            </div>
         
            <div class="datos-der ">
                <h4 class="mb-2">FACTURA</h4>
            <p>Punto de venta: 00003 Comp. Nro:{{random_int(00000000, 99999999)}}</p>
                <p>Fecha de emisión: {{Session::get('fechaEmision')['fecha']}}</p>
                <p>Hora de emisión: {{Session::get('fechaEmision')['hora']}}</p>
                <p class="mt-3">CUIT:{{random_int(00000000, 99999999)}}</p>
                <P>Fecha de inicio de actividades: 20/04/2016</P>
            </div>
        </div>   

        <div class="datos-destino ">
          <h4>DATOS DEL COMPRADOR</h4>
          <p><span class="nombre"> Nombre completo: </span>{{auth()->user()->name}}</p>
          <p><span class="apellido"> Apelido: </span>{{auth()->user()->apellido}}</p>
          <p><span class="apellido"> Email: </span>{{auth()->user()->email}}</p>
          <p><span class="apellido"> Localidad: </span>{{$domicilioUsuario->localidad}}</p>
          <p><span class="apellido"> Provincia: </span>{{$domicilioUsuario->provincia}}</p>
          <p><span class="apellido"> Código postal: </span>{{$domicilioUsuario->codigo_postal}}</p>
        
        </div>
  
        <div class="contenedor-tabla">        
            <table class="table ">
                <thead>
                    <tr>
                      <th scope="col">Código</th>
                      <th scope="col">Producto/Servicio</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">U. Medida</th>
                      <th scope="col">Precio. Unit.</th>
                      <th scope="col">% Bonif</th>
                      <th scope="col">% Imp. Bonif</th>
                      <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach (session('productosUser')[0]->productos as $item)

                 
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->modelo}}</td>
                      <td>{{$item->pivot->cantidad}}</td>
                      <td>unidades</td>
                      <td>$ {{$item->precio}}</td>
                      <td>{{($item->oferta) ? '%'. $item->oferta : '-'}}</td>
                      <td>%0</td>
                      <td>{{($item->oferta != 0) ? '$'. presentPrice($item->precio,$item->oferta ) * 
                        $item->pivot->cantidad : '$'. $item->precio *  $item->pivot->cantidad}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        <div class="precio-total">
            <div class="total">
              
                <p class="">Importe Total: ${{totalPriceProductsUser()}} </p>
            </div>
        </div>
    </div>
</body>
</html>




