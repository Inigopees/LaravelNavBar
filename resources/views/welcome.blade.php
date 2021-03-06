<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{'css/bootstrap.min.css'}}" rel="stylesheet">
        <!-- Styles -->     
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('empleados')}}">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('proyectos.index')}}">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('departamentos')}}">Departamentos</a>
                </li>
            </ul>
        </div>
    </nav>
    </body>
</html>
