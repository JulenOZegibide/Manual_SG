<!DOCTYPE html>
<html>
<head>
    <title>Manual SG</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--CSS de Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--JS de Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--CSS personalizado -->
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('css/index.css')}}">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <!--JS personalizado-->
    <script src="{{secure_asset('js/navbar.js')}}" ></script>
</head>
<body>
    <!--Añade la barra de navegacion desde otro fichero-->
    <input type="button" id="menubutton">
    <div id="menulateral" class="mostrar">
        @include('navbar')
    </div>
    <!--Coje el contenido que se quiere mostrar y lo inserta en esta caja-->
    <div id="contenedor">
        @yield('content')
    </div>

    <footer>
        <ul class="menu pie" >
            <div class="descripcion">
                <p> SG Software de Contabilidad y de Gestión</p>
            </div>
            <div class="info">
                <p>Pedro Asúa 31, bajo 01008, Vitoria-Gasteiz (Álava) </p>
                <p>902 24 25 00 - 945 21 32 06</p>
            </div>
        </ul>
    </footer>
    <!--JS personalizado-->
    <script src="{{secure_asset('js/index.js')}}" ></script>
</body>
</html>
