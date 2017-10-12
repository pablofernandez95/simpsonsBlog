@include('partials.Blog.header');

<main class="container">
    <div id="contenedor" >
        </section>
        <section class="row">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
                <h2 class="text-primary">Imagenes de los Simpsons</h2>
                <p class="lead"> En esta seccion vas a encontrar gran cantidad de imagenes subidas por nuestros fans.</p>
                </p>

                <div id="galeria" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#galeria" data-slide-to="0" class="active"></li>
                        <li data-target="#galeria" data-slide-to="1"></li>
                        <li data-target="#galeria" data-slide-to="2"></li>
                        <li data-target="#galeria" data-slide-to="3"></li>
                        <li data-target="#galeria" data-slide-to="4"></li>
                        <li data-target="#galeria" data-slide-to="5"></li>
                        <li data-target="#galeria" data-slide-to="6"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="imagenes/galeria/imagen1.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="imagenes/galeria/imagen2.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="imagenes/galeria/imagen3.jpg" alt="Flower">
                        </div>

                        <div class="item">
                            <img src="imagenes/galeria/imagen4.jpg" alt="Flower">
                        </div>
                        <div class="item">
                            <img src="imagenes/galeria/imagen5.jpg" alt="Flower">
                        </div>
                        <div class="item">
                            <img src="imagenes/galeria/imagen6.jpg" alt="Flower">
                        </div>
                        <div class="item">
                            <img src="imagenes/galeria/imagen7.jpg" alt="Flower">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#galeria" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#galeria" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>

</main>

</div>
@include('partials.Blog.footer');