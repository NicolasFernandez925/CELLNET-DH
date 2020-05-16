@extends('layouts.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="css/main_styles.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
@endsection

@section('content')

<div class="container pt-5">
    
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 ">
            <div class="bg-login">
                <div class=""><h3 class="text-center title-login  pb">Ingresá</h3></div>
                
				<a class="btn w-100 btn-link" href="{{ route('register') }}">
                    {{ __('No tenes cuenta?') }}
                </a>
                <div class="">
                    <form id="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mt-4">
                            <label for="email" class="col-12 col-md-8 offset-md-2">{{ __('E-Mail ') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="email" type="email" placeholder="Ingresa el mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="errorMail"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-12 col-md-8 offset-md-2">{{ __('Constraseña') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="password"  placeholder="Ingresa la contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="errorPass"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-md-8 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn-form">
                                    {{ __('Ingresar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn w-100 mt-3 btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
    @include('partials.script');
    
    <script>

        let form = document.getElementById("loginForm");
      
        form.addEventListener("submit", (e) => {

            e.preventDefault();
         
            let email = document.getElementById("email").value;
           
            let password = document.getElementById("password").value;
            let errorMail = document.querySelector(".errorMail");
            let errorPass = document.querySelector(".errorPass");
            let p = document.createElement('p');
     
            
                if( email == ""){
            
                    p.innerHTML = 'El email no puede estar vacío';
                    p.classList.add('text-danger');
                    errorMail.appendChild(p);
                    setTimeout(function() { errorMail.removeChild(p); }, 6000);

                    return false;
                }
               

                else if ( (/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(email)) ) {

                    p.innerHTML = 'Ingrese un email válido';             
                    p.classList.add('text-danger');
                    errorMail.appendChild(p);
                    setTimeout(function() { errorMail.removeChild(p); }, 6000);

                    return false;
                }
                         
                if( password == "" ){
                   
                    p.innerHTML = 'El password no puede estar vacío';
                    p.classList.add('text-danger');
                    setTimeout(function() { errorPass.removeChild(p); }, 6000);
                    errorPass.appendChild(p);
                   
                    return false;
                }

                else if (password.length < 8 ) {
                   
                    p.innerHTML = 'Debe tener almenos 8 caracteres alfanuméricos';
                    p.classList.add('text-danger');
                    errorPass.appendChild(p);
                    setTimeout(function() { errorPass.removeChild(p); }, 6000);

                    return false;
                }

               
                form.submit();

        });
            
    </script>
@endsection
