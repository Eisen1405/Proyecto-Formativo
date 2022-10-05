<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    <title>Vista prueba</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Prueba de vista y diseño</h1>
    </div>
    <a href="{{ route('usuarios.index')}}" class="btn btn-info">Index usuarios</a>
    <a href="{{ route('products.index')}}" class="btn btn-info">Index productos</a>

</body>
</html>