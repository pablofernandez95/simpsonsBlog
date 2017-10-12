@include('partials.Blog.header');

<main class="container">
    <div id="contenedor" >
        </section>
        <section class="row">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">  <!-- col (columna) - md ANCHO MEDIO DE PANTALLA - CANTIDAD DE BLOQUES QUE QUIERO QUE OCUPE-->
                <h2 class="text-primary">Bienvenido a la seccion de capitulos!</h2>
                <!-- class lead ==> se le da al primer parrafo con mucho texto, ej como parte del encabezado -->
                <p class="lead"> Aqui vas a encontrar gran cantidad de capitulos que quisas no recordabas o que quieras revivir los momentos mas divertidos de la serie <br>Divertite mirando viejos capitulos y dejanos un comentario sobre que te parecio tu experiencia.
                </p>

                <div class="container col-md-8 col-lg-10">
                    <div class="jumbotron">
                        <img src="imagenes/imagen_video.png" alt="imagen_video" class="img-responsive logos"/>
                        <h3>Capitulos:</h3>
                        <h4>Los Magios:</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jbvkVf5ekHo" frameborder="0" allowfullscreen></iframe>
                        <h4>El Heredero de Burns:</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_8mAtUvnWI8" frameborder="0" allowfullscreen></iframe>
                        <h4>Homero contra la iglecia:</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jd8GgCoEv0U" frameborder="0" allowfullscreen></iframe>
                        <h4>Bart, el amante:</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ISCht0oGD5s" frameborder="0" allowfullscreen></iframe>
                        <h4>El nuevo novio de la Bruja:</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/PiYUhvNBa-A" frameborder="0" allowfullscreen></iframe>
                        <h4>Mi hermano me odia:</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SvaJt22o_eQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>


        </section>



</div>
</main>
@include('partials.Blog.footer');