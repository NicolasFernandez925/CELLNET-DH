@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">

@endsection

@section('nav')
     @include('partials.nav_general')
@endsection

@section('content')
              
<div class="thank-you-section container">

    @if(isset($status))
		<div class="w-100 alert alert-success alert-dismissible fade show " role="alert">
			<strong class="message">{{isset($status) ? $status : ''}}<i class="ml-2 far fa-check-circle"></i></strong>
			<button type="buttom" class="close" data-dismiss="alert" arial-label="close">
				<span aria-hidden="true">&times;</span>				
			</button>
        </div>
        <h3 class="display-3">Gracias por <br> tu compra!</h3>
        <a class="tienda-confirm d-block" href="{{route('shop')}}">Ir a la tienda </a>
        <div class="spacer"></div>
	@endif	

    @if(isset($statusError))
		<div class="w-100 alert alert-danger alert-dismissible fade show " role="alert">
			<strong class="message">{{isset($statusError) ? $statusError : ''}}</strong>
			<button type="buttom" class="close" data-dismiss="alert" arial-label="close">
				<span aria-hidden="true">&times;</span>				
			</button>
        </div>
        <h3 class="display-3">Hubo un error :(</h3>
        <a class="tienda-confirm d-block" href="{{route('shop')}}">Ir a la tienda </a>
        <div class="spacer"></div>
	@endif	
			
</div>

@endsection

@section('script')
	@include('partials.script');
	<script src="{{asset('js/cart_custom.js')}}"></script>

@endsection
