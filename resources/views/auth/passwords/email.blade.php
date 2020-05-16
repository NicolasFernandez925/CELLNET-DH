@extends('layouts.app')
@section('css')
	<link rel="stylesheet" type="text/css" href="../../css/main_styles.css">
	<link rel="stylesheet" type="text/css" href="../../css/responsive.css">
    <link href="../../plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">

@endsection

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="bg-cambiar-pass">
                <div class=""><h3 class="text-center title-cambiar-pass pb-4">Cambiar contraseña</h3></div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-12 col-md-8 offset-md-2">{{ __('E-Mail ') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="email" type="email" placeholder="Ingresa el mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-4">
                            <div class="col-12 col-md-8 w-100 offset-md-2">
                                <button type="submit" class="btn-form">
                                    {{ __('Registrarse') }}
                                </button>
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


