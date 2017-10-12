@include('partials.admin.header');

<main class="container">
    <div id="contenedor" >

        <section class="row"> <!-- clase row==>  elimina los paddings internos(sirve para tener mayor cantidad de contenido de texto)-->
            <!--ANCHO EXACTO DEL CONTAINER PARA CADA TAMAÑO DE PANTALLA= xs (extraSmall >768px), sm (small >=768px), md (medium>=992px), lg (long >=1200px) -->

            <!-- LAS COLUMNAS DEBEN OCUPAR LAS 12 COLUMNAS -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">  <!-- col (columna) - md ANCHO MEDIO DE PANTALLA - CANTIDAD DE BLOQUES QUE QUIERO QUE OCUPE-->
                <h2 class="text-primary">Bienvenido Admin!</h2>
                <img src="imagenes/imagen_admin.jpg" alt="imagen_video" class="img-responsive logos"/>
                <!-- class lead ==> se le da al primer parrafo con mucho texto, ej como parte del encabezado -->


    </article>
            </section>
            </div>
</main>

@include('partials.admin.footer');