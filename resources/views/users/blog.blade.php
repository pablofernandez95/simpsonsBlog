@include('partials.Blog.header');

<main class="container">

    <div id="contenedor" >
        </section>

        <section class="row"> <!-- clase row==>  elimina los paddings internos(sirve para tener mayor cantidad de contenido de texto)-->
            <!--ANCHO EXACTO DEL CONTAINER PARA CADA TAMA�O DE PANTALLA= xs (extraSmall >768px), sm (small >=768px), md (medium>=992px), lg (long >=1200px) -->

            <!-- LAS COLUMNAS DEBEN OCUPAR LAS 12 COLUMNAS -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">  <!-- col (columna) - md ANCHO MEDIO DE PANTALLA - CANTIDAD DE BLOQUES QUE QUIERO QUE OCUPE-->
                <h2 class="text-primary">Bienvenido al BLOG de Los Simpsons!</h2>
                <!-- class lead ==> se le da al primer parrafo con mucho texto, ej como parte del encabezado -->
                <p class="lead"> Comparti tus pensamientos y lee los comentarios de otros fanaticos para estar mas al tanto de las novedades que rodean a esta fantastica serie animada.</p>



                <section id="1">

                    <section class="content">

                        <div class="row row-centered">

                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">

                                <div id="post">

                                    @forelse($posts as $post)



                                    <div class="header_post">
                                        <span class="username"><a href="{{URL::to('/users/blog')}}">{{$post->author->name}}</a></span>

                                        <span class="description">Creado - {{$post->created_at}} </span>
                                    </div>

                                    <div class="body_post">

                                        <!-- T�TULO DEL POST -->
                                        <p>{{$post->body}}</p>
                                        <img class="img-responsive" src="{{$post->images->nameImage}}" alt="Photo">



                                        <!-- BOT�N DE COMPARTIR -->

                                        <a href="{{URL::to('/users/blog')}}" class="btn btn-default stat-item">
                                            <i class="fa fa-thumbs-up icon"></i>{{ $post->author_id}}</a>

                                    </div>

                                        <h3 class="text-primary text-center">Comentarios:</h3>
                                        @foreach ($comments as $comment)

                                            <div>

                                                <div class="comment_body">
                                                    @if($comment->on_post == $post->id)

                                                        <span class="username"><a href="#">{{$comment->author->name}}</a></span>

                                                        <p>{{$comment->body}}</p>
                                                    @endif

                                                </div>

                                            </div>



                                        @endforeach
                                 <!--{!! Form::open (array('action' => 'RegisterController@submitComment')) !!}
                                    <div class="post-footer">
                                        <div class="input-group">
                                            {!! Form::label('comment','Comentario') !!}
                                            {!! Form::text('text',null,['class' => 'form-control','placeholder' => 'Escribe tu comentario'])!!}
                                            <span class="input-group-addon">
                                                         <a href="#"><i class="fa fa-edit"></i></a>
                                                    </span>
                                        </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </div>
                                        {!! Form::close() !!}-->

                           <form action="commentSuccess" method="post">
                                            <div class="post-footer">
                                                <div class="input-group">
                                                    <input class="form-control" name="comentario" placeholder="Escribe tu comentario" type="text" required>
                                                    <input type="hidden" name="on_post" value={{$post->id}}>
                                                    <input type="hidden" name="from_user" value={!! Auth::user()->id !!}>
                                                    <span class="input-group-addon">
                                                         <button type="submit"><i class="fa fa-edit"></i></button>
                                                    </span>
                                                </div>


                                            </div>

                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </form>

                                    @empty
                                        <div>
                                            <img src="imagenes/imagen_no_post.jpg" alt="Sin post" class="img-responsive logos"/>
                                            <p class="text-danger" style="background-color: #fbe1e3">Lo sentimos, no hay posts disponibles. Para crear un post has click <a href="{{URL::to('users/nuevoPost')}}"> aqui</a>. </p>
                                            </div>


                                            @endforelse
                                </div>

                            </div>

                        </div>
                    </section>

</section>

                </article>

    <div id ="numeroPaginas" class="text-center">
        <ul class="pagination">
<?php  ?>

           <!-- <li class="active"><a href="{{URL::to('/users/blog')}}">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="{{URL::to('/users/blog')}}">4</a></li>
            <li><a href="{{URL::to('/users/blog')}}">5</a></li> -->
        </ul>
    </div>
    </section>
    </div>
</main>

</div>

@include('partials.Blog.footer');