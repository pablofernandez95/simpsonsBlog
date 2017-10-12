@include('partials.Blog.header');

<main class="container">
    <div id="contenedor" >


        <div class="row"> <!-- clase row==>  elimina los paddings internos(sirve para tener mayor cantidad de contenido de texto)-->
            <!--ANCHO EXACTO DEL CONTAINER PARA CADA TAMAÑO DE PANTALLA= xs (extraSmall >768px), sm (small >=768px), md (medium>=992px), lg (long >=1200px) -->

            <!-- LAS COLUMNAS DEBEN OCUPAR LAS 12 COLUMNAS -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">  <!-- col (columna) - md ANCHO MEDIO DE PANTALLA - CANTIDAD DE BLOQUES QUE QUIERO QUE OCUPE-->
                <h2 class="text-primary">Bienvenido al BLOG de Los Simpsons!</h2>
                <!-- class lead ==> se le da al primer parrafo con mucho texto, ej como parte del encabezado -->
                <p class="lead"> Comparti tus pensamientos y lee los comentarios de otros fanaticos para estar mas al tanto de las novedades que rodean a esta fantastica serie animada.</p>
            </article>

            <div id="post">
                <div class="header_post">
                    <img class="img-circle" src="../imagenes/usuarios/Ale Perez/img_usuario.jpg" alt="User Image">
                    <span class="username"><a href="detalle.php">Ale Perez</a></span>
                    <span class="description">Creado - 07/11/2016 - 17:30 </span>
                </div>

                <div class="body_post">

                    <img class="img-responsive" src="../imagenes/usuarios/Ale Perez/post1.jpg" alt="Photo">

                    <!-- TÍTULO DEL POST -->
                    <p>Esta imagen es genial!!!. <br>Que? que soy un pervertido?. <br>No, que esta despedido...</p>

                    <!-- BOTÓN DE COMPARTIR -->
                    <a href="#" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>

                    <!-- ESTADÍSTICA DEL POST -->
                    <span class="pull-right text-muted">127 likes - 3 comentarios</span>
                </div>
            </div>

            </div>

    </div>
    <div id ="numeroPaginas">
        <ul class="pagination">
            <li class="active"><a href="#1">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>
    </section>
    </div>
</main>

</div>

@include('partials.Blog.footer');