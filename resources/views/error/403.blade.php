<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Error-403</title>
</head>

<style>

.regresar{

    font-size: 20px;
}
a:hover {
   
    text-decoration: none;
}

</style>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <img class="pt-5 " src="{{asset('images/403.png')}}" alt="">
                <span><i class="fas fa-fire"></i></span><h1 class="display-4">¡No tienes acceso a esta página!</h1>
                <a class="mt-3 d-block regresar" href="{{url('/')}}">Regresar a la página de inicio</a>
            </div>
        </div>
    </div>
  

</body>
</html>