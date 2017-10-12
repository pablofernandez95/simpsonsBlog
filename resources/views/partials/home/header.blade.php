<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta charset="UTF-8">
    <title>Inicio</title>
    <base href="{!! asset("") !!}">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link href="http://es.seaicons.com/wp-content/uploads/2016/04/CD-icon.png" rel='shortcut icon' type="image/png">

</head>
<body>

<header class="col-xs-12 col-sm-12 col-md-12 col-lg-12 affix  ">

    <div class="container">
        <h1><a href="{{URL::to('/')}}"><img id="logo" src="imagenes/logo_simpsons.png" alt="logo"/></a> Inicio</h1>
        <nav class="navbar navbar-inverse">
            <button type="button" class="navbar-toggle collapsed" data-toggle=collapse data-target="#barra_navegacion">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="barra_navegacion">
                <ul class="nav navbar-nav">
                    <li><a href="{{URL::to('/')}}">Inicio</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ URL::to('login') }}"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
                    <li><a href="{{ URL::to('registro') }}"><span class="glyphicon glyphicon-user"></span> Registrate</a></li>

                </ul>
            </div>
        </nav>
    </div>
</header>

