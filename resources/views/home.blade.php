@include('partials.home.header');

<main class="container">
    <div id="contenedor" >
        </section>
        <section class="row"> <!-- clase row==>  elimina los paddings internos(sirve para tener mayor cantidad de contenido de texto)-->
            <!--ANCHO EXACTO DEL CONTAINER PARA CADA TAMAÑO DE PANTALLA= xs (extraSmall >768px), sm (small >=768px), md (medium>=992px), lg (long >=1200px) -->

            <!-- LAS COLUMNAS DEBEN OCUPAR LAS 12 COLUMNAS -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">  <!-- col (columna) - md ANCHO MEDIO DE PANTALLA - CANTIDAD DE BLOQUES QUE QUIERO QUE OCUPE-->
                <h2 class="text-primary">Bienvenido al BLOG de Los Simpsons!</h2>
                <!-- class lead ==> se le da al primer parrafo con mucho texto, ej como parte del encabezado -->
                <p class="lead"> En esta web vas a encontrar mucho contenido en referencia con una de las series animadas mas exitosas de todo el mundo, tanto como imagenes, capitulos, frases, hasta incluso comentarios de fanaticos de la serie en esta WEB.</p>
                </p>

                <div class="container col-md-8 col-lg-10">
                    <div class="jumbotron">
                        <img src="imagenes/imagen_registro.jpg" alt="imagen_registro" class="img-responsive logos"/>
                        <h3>Registrate Ahora!!!</h3>
                        <p>Al registrarte tendras acceso a todo el contenido de la WEB y ademas podras compartir todos tus conociminentos de los simpons con todo el mundo.</p>
                        <p>Que esperas es facil y sencillo!</p>

                        <a id="boton" href="registro.html" class="btn btn-primary">Registrate</a>
                    </div>
                </div>

        </section>
        <div id="boton" class="col-md-4">
            <img src="imagenes/imagen_seccion1.png" alt="imagen_seccion1" class="img-responsive">
            <div class="caption">
                <h4>Por que registrarse en esta WEB?</h4>
                <p> Es facil, ya que es la unica WEB desarrollada por fanaticos y para fanaticos de esta serie con un humor unico e inigualable</p>
                <p> Ademas podes estar al tanto de las novedades exclusivas de la serie.</p>
            </div>
        </div>
        <div id="boton" class="col-md-4">
            <img src="imagenes/imagen_seccion2.png" alt="imagen_seccion2" class="img-responsive">
            <div class="caption">
                <h4>Que es lo que puedo aportar?</h4>
                <p> Con tu ayuda nos vas a poder permitir mejorar nuestra WEB con noticias o hasta informacion inportante sobre los capitulos.</p>
                <p> Si tus aportes son lo suficientemente importantes podras tener la oportunidad de unirte a nuestro ejercito de monos administradores</p>
            </div>
        </div>
        <div id="boton" class="col-md-4">
            <img src="imagenes/imagen_seccion3.png" alt="imagen_seccion3" class="img-responsive">
            <div class="caption">
                <h4>Crees ser lo suficientemente fanatico?</h4>
                <p> Con nuestro foro podes demostrar tu alto nivel de fanatismo muy facilmente al compartir tus ideas con los otros fans.</p>
            </div>
        </div>



</main>

</div>

@include('partials.home.footer');