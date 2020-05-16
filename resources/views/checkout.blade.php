@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href={{asset('css/checkout_style.css')}}>
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">

@endsection

@section('nav')
     @include('partials.nav_general')
@endsection

@section('content')

<!-- checkout -->
<div class="container pt-5">
    <div class="row my-5">
        <div class="col-12 col-md-6">

            @if(Session::has('mensaje'))
				<div class="alert alert-success alert-dismissible fade show " role="alert">
					<strong class="message">{{Session::get('mensaje')}}</strong>
					<button type="buttom" class="close" data-dismiss="alert" arial-label="close">
					    <span aria-hidden="true">&times;</span>
					</button>
				</div>					
            @endif	

            @if(count($errors) > 0)
                <div class="spacer"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="menu-pan mb-5">
                <a href="{{route('index')}}">Home</a>
                <i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
                <a href="{{route('cart.show')}}">Carrito</a>
                <i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
                <span>Checkout</span>
							
            </div>
            <form action="{{(route('procesar.pago'))}}" method="POST" id="payment-form">
                @csrf
                <!-- Form route -->
                <h3 class="mb-5">Checkout</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">               
                        <label for="inputEmail4">Nombre</label>
                        <input type="text" class="form-control {{isset(auth()->user()->apellido) ? 'bg-input' : ''}}" name="nombre" id="nombreUser" placeholder="Nombre" 
                            value="{{auth()->check() ? auth()->user()->name : ''}}" >

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido</label>
                        <input type="text" name="apellido" class="form-control {{isset(auth()->user()->apellido) ? 'bg-input' : '' }}" id="inputPassword4" placeholder="Apellido" 
                            value="{{auth()->check() ? auth()->user()->apellido : ''}}" >
                    </div>
                </div>
                 <div class="form-row">
                    <div class="form-group col-md-6">               
                        <label for="tipo-dni">Tipo DNI</label>
                        <select class="custom-select m-0"  name="tipo-dni" >
                                <option value="">Seleccionar</option>
                                <option value="dni">DNI</option>
                                <option value="cedula">Cédula</option> 
                        </select>
                    </div>
                    <div class="form-group col-md-6">    
                          <label for="nro-dni">Nro. DNI</label>
                        <input type="text" class="form-control" name="nro-dni" id="nro-dni" placeholder="Ingrese su dni" value="{{old('nro-dni')}}" >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6"> 
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control {{isset(auth()->user()->apellido) ? 'bg-input' : ''}}" id="inputEmail4" placeholder="Email" 
                            value="{{auth()->check() ? auth()->user()->email : ''}}" required>
                    </div>       
                    <div class="form-group col-md-6"> 
                        <label for="codigoPostal">Código Postal</label>
                        <input type="text" name="codigoPostal" class="form-control" id="codigoPostal" placeholder="Ingresa tu código postal" 
                            value="{{old('codigoPostal')}}" required>
                    </div>       
                          
                </div>
                <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="provincias">Provincia</label>
                        <select id="provincias" name="provincia" class="custom-select form-control" >
                        </select>
                    </div>  
                    <div class="form-group col-md-6">
                        <div class="col-md-12">
                            <label for="state">Localidad</label>
                            <select id="municipios" name="municipio"  class="custom-select form-control"  >
                            </select>
                        </div>
                    </div>       
                </div>  
                <div class="form-row">				  
                    <div class="form-group col-md-6">
                        <label for="cod-area">Cod. Área</label>
                        <input type="text" name="cod-area" value="{{old('cod-area')}}"  id="cod-area"class="form-control" placeholder="Ej: 011">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" value="{{old('telefono')}}"  id="telefono"class="form-control" placeholder="Ej: 62934578">
                    </div>
                </div>
                <div class="form-row">				  
                    <div class="form-group col-md-6">
                        <label for="direccion">Dirección</label>
                        <input type="text" name="direccion" value="{{old('direccion')}}"  id="direccion"class="form-control" placeholder="Dirección">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nro-calle">Nro</label>
                        <input type="text" name="nro-calle" value="{{old('nro-calle')}}"  id="nro-calle"class="form-control" placeholder="Ej: 255">
                    </div>
                   
                </div>
                <hr>
                <div class="botones mt-3">
                    <button type="submit" id="complete-order" class="btn-agregar">Realizar el pago</button>
                </div>				  
            </form>
        </div>

        <div class="col-12 col-md-4  offset-md-1 compras ">
            <h3 class="mb-3">Mi orden</h3>
            <hr>
                <p>
                    <button class="btn-productos" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                     Mis productos<i class="ml-2 fas fa-sort"></i>
                    </button>
                   
                </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    @foreach (session('productosUser')[0]->productos as $item)
                    <div class="product">
                        <img class="mb-2" src="{{asset('images/imagenes-productos/'.$item->imagen)}}" alt="" style="height:90px">
                        <p>{{$item->modelo}}</p>
                      																					  
                        <span class="d-block span-orden">Cantidad: {{ $item->pivot->cantidad}}</span>                              
                                
                        <span class="d-block span-orden">Descuento: {{($item->oferta) ? '%'. $item->oferta : '-'}}</span>
                        <span class="d-block span-orden">Precio actual: $ {{($item->precio)}}</span>
                        <span class="span-orden">SubTotal: $ <span class="text-success price">{{($item->oferta != 0) ? presentPrice($item->precio,$item->oferta ) * 
                            $item->pivot->cantidad : $item->precio *  $item->pivot->cantidad}}</span> </span>     
                    </div>   
                    <hr class="my-3"> 
                    @endforeach
                </div>
              </div>      
            <hr>
            <span class="span-orden">Total: <span class="text-danger price-total"> $ {{totalPriceProductsUser()}} </span></span>
            <hr>
        </div>
    </div>
</div>
<a class="ir-arriba" >
    <span class="fa-stack">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
    </span>
</a>
@endsection

@section('footer')
@endsection

@section('script')
	@include('partials.script');
    <script src="{{asset('js/custom.js')}}"></script>

    <script>

        window.onload = function() {
        //Desactivo el boton submit al enviar
        let btn = document.getElementById('complete-order');
        
        let form = document.getElementById('payment-form');
        form.addEventListener('submit', function(){
            btn.disabled = true;
        });
       
        let selectProvincias = document.querySelector('#provincias');
        let selectMunicipios = document.querySelector('#municipios')
        let elFormulario = document.forms[0];

      
        function cargarProvincias() {
          fetch('https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre')
          .then(function(respuestaAPI) {
            return respuestaAPI.json();
          })
          .then(function(respuestaProvincias) {

            selectProvincias.innerHTML = `
              <option value="" disabled selected>Seleccione una provincia...</option>
            `;
            for(let unaProvincia of respuestaProvincias.provincias) {
              let optionProvincia = document.createElement('option');
              optionProvincia.setAttribute('value', unaProvincia.nombre);
              optionProvincia.innerHTML = unaProvincia.nombre;
              selectProvincias.append(optionProvincia);
            }
          })
        }
      
        function cargarMunicipios(idMunicipio) {
          fetch(' https://apis.datos.gob.ar/georef/api/municipios?provincia='+idMunicipio+'&campos=id,nombre&max=100')
          .then(function(respuestaAPI) {
          
            return respuestaAPI.json();

          
          })
          .then(function(respuestaMunicipios) {
            selectMunicipios.innerHTML = `
              <option value="" disabled selected>Seleccione un municipio...</option>
            `;
            for(let unMunicipio of respuestaMunicipios.municipios) {
              let optionMunicipio = document.createElement('option');
              optionMunicipio.setAttribute('value', unMunicipio.nombre);
              optionMunicipio.innerHTML = unMunicipio.nombre;
              selectMunicipios.append(optionMunicipio)
            }
          })
        }
      
        cargarProvincias();
        selectProvincias.addEventListener('change', function() {
          let provinciaSeleccionada = selectProvincias.value;
          cargarMunicipios(provinciaSeleccionada);
        })
      
      }
      
    </script>
@endsection