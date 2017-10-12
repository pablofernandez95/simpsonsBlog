<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta charset="UTF-8">
    <title>BLOG</title>
    <base href="{!! asset("") !!}">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/estilos.css" />

    <link href="http://es.seaicons.com/wp-content/uploads/2016/04/CD-icon.png" rel='shortcut icon' type="image/png">
</head>
<body>

<header class="col-xs-12 col-sm-12 col-md-12 col-lg-12 affix  ">

    <div class="container">
        <h1><a href="{{URL::to('/users/blog')}}"><img id="logo" src="imagenes/logo_simpsons.png" alt="logo"/></a> BLOG</h1>
        <nav class="navbar navbar-inverse">
            <button type="button" class="navbar-toggle collapsed" data-toggle=collapse data-target="#barra_navegacion">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="barra_navegacion">
                <ul class="nav navbar-nav">

                    <li><a href="{{URL::to('/users/blog')}}">BLOG</a></li>
                    <li><a href="{{ URL::to('/users/personajes') }}">Personajes</a></li>
                    <!--<li><a href="{{ URL::to('/users/imagenes') }}">Imagenes</a></li>-->
                    <li><a href="{{ URL::to('/users/capitulos') }}">Capitulos</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
            <li class="dropdown open">
                    <a href="#"class="dropdown-toggle" role="button" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>   {!! Auth::user()->name !!}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::to('/users/nuevoPost') }}"><span class="glyphicon glyphicon-cloud-upload"></span> Creá tu Post</a></li>
                            <li><a href="{{ URL::to('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
                        </ul>
            </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
