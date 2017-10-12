@include('partials.admin.header')
<main class="container">
    <div id="contenedor" >
        </section>
        <section class="row"> <!-- clase row==>  elimina los paddings internos(sirve para tener mayor cantidad de contenido de texto)-->
            <!--ANCHO EXACTO DEL CONTAINER PARA CADA TAMA�O DE PANTALLA= xs (extraSmall >768px), sm (small >=768px), md (medium>=992px), lg (long >=1200px) -->

            <!-- LAS COLUMNAS DEBEN OCUPAR LAS 12 COLUMNAS -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">  <!-- col (columna) - md ANCHO MEDIO DE PANTALLA - CANTIDAD DE BLOQUES QUE QUIERO QUE OCUPE-->
                <h2 class="text-primary">Seccion de lista de Usuarios!</h2>
                <!-- class lead ==> se le da al primer parrafo con mucho texto, ej como parte del encabezado -->
                <p class="lead text-center"> Puedes eliminar o editar usuarios como admin</p>
                </p>

            <div class="box-body table-responsive no-padding">
<?php
               // $results = DB::select('select * from users where id = ?', array(1));

                $users = DB::table('users')->get();


        ?>
                        <table class="table table-hover ">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Password</th>
								<th>Rol</th>
								<th>Fecha Creacion</th>
                                <th><a href="{{URL::to('/admin/nuevoUsuario')}}" class="btn btn-sm btn-warning pull-left"><i class="glyphicon glyphicon-plus"></i></a></th>

                            </tr>



<tr>
    <?php

    $users = DB::table('users')->get();
?>
</tr>
@foreach($users as $user)
                           <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
								<td>{{$user->password}}</td>
								<td>{{$user->role}}</td>
								<td>{{$user->created_at}}</td>

                                <td>


                                    <div class="btn-group">

                                        <a href="{{URL::to('/admin/editarUsuario/'. $user->id)}}" class="btn btn-sm btn-success pull-left"><i class="glyphicon glyphicon-pencil"></i></a>

                                            <a href="{{URL::to('/admin/eliminarUsuario/'. $user->id)}}" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

                                        <!--<a class="btn btn-small btn-danger" href="{{ URL::to('admin/eliminarUsuario/' . $user->id) }}">Show this User</a> -->
                                        </div>
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