@include('partials.Blog.header');

<main class="container">
    <div id="contenedor" >
        </section>
        <section class="row"> <!-- clase row==>  elimina los paddings internos(sirve para tener mayor cantidad de contenido de texto)-->
            <!--ANCHO EXACTO DEL CONTAINER PARA CADA TAMA�O DE PANTALLA= xs (extraSmall >768px), sm (small >=768px), md (medium>=992px), lg (long >=1200px) -->

            <!-- LAS COLUMNAS DEBEN OCUPAR LAS 12 COLUMNAS -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  <!-- col (columna) - md ANCHO MEDIO DE PANTALLA - CANTIDAD DE BLOQUES QUE QUIERO QUE OCUPE-->
                <h2 class="text-primary">Bienvenido a la seccion de personajes de los Simpsons</h2>
                <!-- class lead ==> se le da al primer parrafo con mucho texto, ej como parte del encabezado -->
                <p class="lead"> En esta seccion encontraras imagenes de personajes que aparecen en la serie de Los Simpsons</p>
                </p>

                <section class="row">
                    <img src="imagenes/imagen_personajes.png" alt="imagen_personajes" class="img-responsive logos" />
                </section>

                <section class="row">
                    <div class="container  col-xs-offset-3 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                        <section id="personajes">
                            <div>
                                <img src="http://vignette2.wikia.nocookie.net/lossimpson/images/f/f7/Troy_McClure.png/revision/latest/scale-to-width-down/126?cb=20150716182717&path-prefix=es&format=webp" alt="Troy" />
                                <p>Troy McClure</p>
                            </div>
                            <div>
                                <img src="http://vignette4.wikia.nocookie.net/lossimpson/images/f/f8/Patty_Bouvier.png/revision/latest/scale-to-width-down/120?cb=20090802231042&path-prefix=es&format=webp" alt="Patty" />
                                <p>Patty Bouvier</p>
                            </div>
                            <div>
                                <img src="http://vignette4.wikia.nocookie.net/lossimpson/images/b/ba/Selma_Bouvier.png/revision/latest/scale-to-width-down/120?cb=20110108123553&path-prefix=es&format=webp" alt="Selma" />
                                <p>Selma Bouvier</p>
                            </div>
                            <div>
                                <img src="http://vignette2.wikia.nocookie.net/lossimpson/images/9/9d/Charles_Montgomery_Burns.png/revision/latest/scale-to-width-down/120?cb=20090227021502&path-prefix=es&format=webp" alt="Burns" />
                                <p>Montgomery Burns</p>
                            </div>
                            <div>
                                <img src="http://vignette4.wikia.nocookie.net/lossimpson/images/1/11/Milhouse_Van_Houten.png/revision/latest/scale-to-width-down/122?cb=20150426062610&path-prefix=es&format=webp" alt="Milhouse" />
                                <p>Milhouse Van Houten</p>
                            </div>
                        </section>
                        <section id="personajes">
                            <div>
                                <img src="http://vignette4.wikia.nocookie.net/lossimpson/images/9/95/Maude_Flanders.png/revision/latest/scale-to-width-down/129?cb=20150426153503&path-prefix=es&format=webp" alt="Maude" />
                                <p>Maude Flanders</p>
                            </div>
                            <div>
                                <img src="http://vignette1.wikia.nocookie.net/lossimpson/images/8/84/Ned_Flanders.png/revision/latest/scale-to-width-down/130?cb=20150426062016&path-prefix=es&format=webp" alt="Ned" />
                                <p>Ned Flanders</p>
                            </div>
                            <div>
                                <img src="http://vignette3.wikia.nocookie.net/lossimpson/images/8/80/Rod_Flanders.png/revision/latest/scale-to-width-down/120?cb=20150426152525&path-prefix=es&format=webp" alt="Rod" />
                                <p>Rod Flanders</p>
                            </div>
                            <div>
                                <img src="http://vignette2.wikia.nocookie.net/lossimpson/images/1/18/Todd_Flanders.png/revision/latest/scale-to-width-down/120?cb=20150426151905&path-prefix=es&format=webp" alt="Todd" />
                                <p>Todd Flanders</p>
                            </div>
                            <div>
                                <img src="http://vignette3.wikia.nocookie.net/lossimpson/images/c/c5/Nelson_Muntz.png/revision/latest/scale-to-width-down/120?cb=20150426064846&path-prefix=es&format=webp" alt="Nelson" />
                                <p>Nelson Muntz</p>
                            </div>

                        </section>
                        <section id="personajes">

                            <div>
                                <img src="http://vignette3.wikia.nocookie.net/lossimpson/images/9/98/Professor_Frink_2.png/revision/latest/scale-to-width-down/160?cb=20110623201027&path-prefix=es&format=webp" alt="Frink" />
                                <p>Profesor Frink</p>
                            </div>
                            <div>
                                <img src="http://vignette3.wikia.nocookie.net/lossimpson/images/c/c8/Frank_Grimes.png/revision/latest/scale-to-width-down/160?cb=20110623203527&path-prefix=es&format=webp" alt="Grimes" />
                                <p>Frank Grimes</p>
                            </div>
                            <div>
                                <img src="http://vignette3.wikia.nocookie.net/lossimpson/images/4/44/Frank_Grimes_Jr..png/revision/latest/scale-to-width-down/136?cb=20110215183738&path-prefix=es&format=webp" alt="Grimes Jr" />
                                <p>Frank Grimes Jr</p>
                            </div>
                            <div>
                                <img src="http://vignette2.wikia.nocookie.net/lossimpson/images/d/de/Barney_Gumble.png/revision/latest/scale-to-width-down/120?cb=20150426063135&path-prefix=es&format=webp" alt="Barney" />
                                <p>Barney Gumble</p>
                            </div>
                            <div>
                                <img src="http://vignette1.wikia.nocookie.net/lossimpson/images/1/14/Ralph_Wiggum.png/revision/latest/scale-to-width-down/120?cb=20150426070659&path-prefix=es&format=webp" alt="Ralph" />
                                <p>Ralph Wiggum</p>
                            </div>
                        </section>
                        <section id="personajes">
                            <div>
                                <img src="http://vignette1.wikia.nocookie.net/lossimpson/images/6/65/Bart_Simpson.png/revision/latest/scale-to-width-down/120?cb=20100530014756&path-prefix=es&format=webp" alt="Bart" />
                                <p>Bart Simpson</p>
                            </div>
                            <div>
                                <img src="http://vignette1.wikia.nocookie.net/lossimpson/images/e/ec/Lisa_Simpson.png/revision/latest/scale-to-width-down/120?cb=20101120082357&path-prefix=es&format=webp" alt="Lisa" />
                                <p>Lisa Simpson</p>
                            </div>
                            <div>
                                <img src="http://vignette2.wikia.nocookie.net/lossimpson/images/b/bd/Homer_Simpson.png/revision/latest/scale-to-width-down/120?cb=20100522180809&path-prefix=es&format=webp" alt="Homero" />
                                <p>Homero Simpson</p>
                            </div>
                            <div>
                                <img src="http://vignette3.wikia.nocookie.net/lossimpson/images/0/0b/Marge_Simpson.png/revision/latest/scale-to-width-down/120?cb=20090415001251&path-prefix=es&format=webp" alt="Marge" />
                                <p>Marge Simpson</p>
                            </div>
                            <div>
                                <img src="http://vignette1.wikia.nocookie.net/lossimpson/images/9/9d/Maggie_Simpson.png/revision/latest/scale-to-width-down/120?cb=20100529224628&path-prefix=es&format=webp" alt="Maggie" />
                                <p>Maggie Simpson</p>
                            </div>

                        </section>


                </section>

    </div>



</main>

</div>
@include('partials.Blog.footer');