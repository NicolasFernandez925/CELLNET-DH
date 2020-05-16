@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href={{asset('css/myaccount_style.css')}}>
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
@endsection

@section('nav')
     @include('partials.nav_general')
@endsection

@section('content')
        <!-- checkout -->
             
        <div class="container pt-5">
            <div class="menu-pan mb-5">
                <a href="{{route('index')}}">Home</a>
                <i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
                <span>Mi Cuenta</span>				
            </div>
            @if(count($errors) > 0)
                <div class="spacer"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="li-error">{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row my-5 bg-light p-5">
                <div class="col-12 col-lg-{{!($productosUser == '') ? '6' : '8 offset-md-2' }}">
                    @if(Session::has('status'))
                        <div class="W-100 text-center alert alert-success alert-dismissible fade show " role="alert">
                            <strong class="message">{{Session::get('status')}}</strong>
                            <button type="buttom" class="close" data-dismiss="alert" arial-label="close">
                                <span aria-hidden="true">&times;</span>                  
                            </button>
                        </div>
                    @endif
                    <form action="{{route('account.edit')}}" method="post">
                         @csrf
                        @method('PUT') 
                        <h3 class="mi-cuenta">Mi cuenta</h3>
						<div class="form-row">
                            <div class="form-group col-md-12">               
                                <label for="inputEmail4">Nombre</label>
                                <input type="text" class="form-control {{isset($usuario->name) ? 'bg-input' : ''}}" name="nombre" id="modelo" placeholder="Nombre" 
                                        value="{{$usuario->name}}">
                             
                             </div>
                      
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">               
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control  {{isset($usuario->email) ? 'bg-input' : ''}}" name="email" id="modelo" placeholder="Email" 
                                        value="{{$usuario->email}}">
                                
                            </div>
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">               
                                    <label for="inputEmail4">Apellido</label>
                                    <input type="text" class="form-control  {{isset($usuario->apellido) ? 'bg-input' : ''}}" name="apellido" id="modelo" placeholder="Apellido" 
                                        value="{{$usuario->apellido}}">
                                   
                                </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="foto-perfil mb-5 w-100 text-center">
                                <img class="img-profile" src="{{asset('/storage/img-profile-user/'.$usuario->foto_perfil)}}" alt="">
                            </div>
						</div>
						<div class="boton-guardar text-center">
							<button type="submit" class="btn-agregar w-50">Guardar cambios</button>
                        </div>	
                    </form>	
                </div>

                @if(!($productosUser == ''))
                <div class="col-12 col-lg-4 offset-lg-2">				
					<div class="factura">
                        <h3 class="mis-compras">Mis compras</h3>
                        @if(Session::has('confirm-pago'))
                            <a class="mb-4 factura-pdf" href="{{route('factura.pdf')}}">{{Session::get('confirm-pago')}}</a>										
                        @endif                           		
                    </div>            
                        <div class="card card-body">
                        @foreach ($productosUser as $item)
                            <div class="product">
                                <img class="mb-2" src="{{asset('images/imagenes-productos/'.$item->imagen)}}" alt="" style="height:90px">
                                <p>{{$item->modelo}}</p>                                                                                                                   
                                <span class="d-block span-orden"><span class="precio-mi-cuenta">Precio: $ </span> <span class="precio-final">{{($item->precio)}}</span></span>
                            </div>   
                            <hr class="my-3"> 
                         @endforeach
                    </div>    
                </div>
                @endif
            </div>		  
        </div>

        <a class="ir-arriba" >
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
            </span>
        </a>
@endsection

@section('script')
	@include('partials.script');
	<script src="{{asset('js/custom.js')}}"></script>
@endsection