@include('partials.admin.header');

<main class="container">
    <div id="contenedor" >
        </section>
        <section class="row"> <!-- clase row==>  elimina los paddings internos(sirve para tener mayor cantidad de contenido de texto)-->
            <!--ANCHO EXACTO DEL CONTAINER PARA CADA TAMA�O DE PANTALLA= xs (extraSmall >768px), sm (small >=768px), md (medium>=992px), lg (long >=1200px) -->

            <!-- LAS COLUMNAS DEBEN OCUPAR LAS 12 COLUMNAS -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">  <!-- col (columna) - md ANCHO MEDIO DE PANTALLA - CANTIDAD DE BLOQUES QUE QUIERO QUE OCUPE-->
                <h2 class="text-primary">Seccion de Posteos!</h2>
                <!-- class lead ==> se le da al primer parrafo con mucho texto, ej como parte del encabezado -->
                <p class="lead"> Puedes eliminar o editar posteos como admin</p>
                </p>

            <div class="box-body table-responsive no-padding">
<?php
               // $results = DB::select('select * from users where id = ?', array(1));

                $comments = DB::table('comments')->get();


        ?>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Contenido</th>
                                <th>Post</th>
                                <th>Nombre Autor</th>
								<th>Fecha Creacion</th>

                            </tr>



<tr>

</tr>
@foreach($comments as $comment)
                           <tr>
                                <td>{{$comment->id}}</td>
                                <td>{{$comment->body}}</td>
                                <td>{{$comment->on_post}}</td>
								<td>{{$comment->from_user}}</td>
                                <td>{{$comment->created_at}}</td>


                                <td>


                                   <!-- <div class="btn-group">
                                        {!! Form::open(array('action','AdminPanelController@destroyPost'))!!}
                                        <button type="button" class="btn btn-sm btn-success pull-left"><i class="glyphicon glyphicon-pencil"></i></button>
                                       --> {!! Form::close()!!}
                                            <a href="{{URL::to('/admin/eliminarComment/'.$comment->id)}}" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>





                                </td>
                            </tr>

@endforeach

                        </table>


            </div>
            </section>



</div>
    </article>
</main>


@include('partials.admin.footer');