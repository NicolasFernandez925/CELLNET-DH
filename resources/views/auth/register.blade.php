@extends('layouts.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="css/main_styles.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

@endsection

@section('content')
<div class="container pt-5">
   
    <div class="row ">
        <div class="col-12 col-md-8 offset-md-2">  
                <div class="bg-register">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }} " id="registerForm">
                        @csrf
                        <div class="form-group ">
                            <div class="errors alert alert-danger d-none text-center"></div>
                            <h3 class="text-center title-register  pb-5">Registrate</h3>
                            <label for="name" class="col-12 col-md-8 offset-md-2">{{ __('Nombre') }}</label>
                            
                            <div class="col-12 col-md-8 offset-md-2">
                               
                                <input id="name" type="text"  placeholder="Ingresa tu nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="errorNombre"></span>
                            </div>
                        </div>

						<div class="form-group ">
                            <label for="apellido" class="col-12 col-md-8 offset-md-2">{{ __('Apellido ') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="apellido" type="text"  placeholder="Ingresa tu apellido" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}"  autocomplete="apellido">

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="errorApellido"></span>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="col-12 col-md-8 offset-md-2">{{ __('E-Mail ') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="email" type="email"  placeholder="Ingresa tu email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="errorEmail"></span>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class="col-12 col-md-8 offset-md-2">{{ __('Contraseña') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="password" type="password"  placeholder="Ingresa tu contraseña" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="errorPass"></span>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password-confirm" class="col-12 col-md-8 offset-md-2">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="password-confirm"  placeholder="Ingresa de nuevo tu contraseña" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

						<div class="form-group ">
                            <label for="foto" class="col-12 col-md-8 offset-md-2">{{ __('Foto de perfil') }}</label>

                            <div class="col-12 col-md-8 offset-md-2">
                                <input id="foto" type="file"  placeholder="Subi tu foto" class="form-control @error('foto') is-invalid @enderror" name="foto" autocomplete="" style="border:none;padding:0px">

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="errorFoto_perfil"></span>
                            </div>
                        </div>
					
						<div class="form-group  input-select">
                            <label for="rol" class="col-12 col-md-8 offset-md-2">{{ __('Rol') }}</label>
                             
                            <div class="col-12 col-md-8 offset-md-2">
							<select id="rol" class="form-control @error('rol') is-invalid @enderror custom-select my-1 mr-sm-2" name="rol"  id="inlineFormCustomSelectPref">
								<option selected value="0" >Elejir...</option>
								<option value="1">Admin</option>
								<option value="2">Usuario</option>                   
							</select>

                                @error('rol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="errorRol"></span>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-12 col-md-8 offset-md-2">
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
@endsection


@section('script')
    @include('partials.script');
    
    <script>

        let form = document.getElementById("registerForm");
          
        form.addEventListener("submit", (e) => {
           
            e.preventDefault();

            let errors = '';
            let errorsDiv = document.querySelector(".errors");
          
            let email = document.getElementById("email").value;       
            let pass = document.getElementById("password").value;
            let pass_confirm =  document.getElementById("password-confirm").value;
            let apellido =  document.getElementById("apellido").value;
            let nombre =  document.getElementById("name").value;
            let foto =  document.getElementById("foto").value;
            let rol =  document.getElementById("rol").value;
                     
            let p = document.createElement('p');
     
            if( nombre == ""){
                
                errors += `<p class="text-danger mb-0">El campo <strong>nombre</strong> no puede estar vacío </p>`;
               
            }

            if( apellido == ""){
            
                errors += `<p class="text-danger mb-0">El campo <strong>apellido</strong> no puede estar vacío </p>`;
              
            }
            
            if( email == ""){
            
                errors += `<p class="text-danger mb-0">El campo <strong>email</strong> no puede estar vacío </p>`;
            }
          
            else if ( (/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(email)) ) {

                errors += `<p class="text-danger mb-0">El campo <strong>email</strong> no es válido </p>`;

            }
                                    
            if( pass == "" ){

                errors += `<p class="text-danger mb-0">El campo <strong>contraseña</strong> no puede estar vacío </p>`;
            }

            else if (pass.length < 8 ) {    

                errors += `<p class="text-danger mb-0">El campo <strong>contraseña</strong> debe tener alemnos 8 carácteres  </p>`;
            }

            if (pass != pass_confirm ) {
                   
                errors += `<p class="text-danger mb-0">Las <strong>contraseñas</strong> deben ser iguales</p>`;
            }
            if (rol == 0 ) {
                errors += `<p class="text-danger mb-0">Debe seleccionar un <strong>Rol</strong></p>`;            
            }         
                    
            if(errors.length == 0){
                 form.submit();
            }
              
            errorsDiv.classList.remove("d-none");
            errorsDiv.innerHTML = errors;
          
            setTimeout(function() {  errorsDiv.classList.add('d-none'); }, 7000);
               
        });

    </script>
@endsection
