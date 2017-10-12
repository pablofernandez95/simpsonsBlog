@include('partials.admin.header');
<base href="{!! asset("") !!}" xmlns:required>
<main class="container">
    <div id="contenedor" >
        <section class="row">
            <div class="register-box col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2 class="text-primary">Completa los datos :</h2>
                <div class="register-logo">
                    <img src="imagenes/imagen_admin_usuario.jpg"  class="img-responsive logos"alt="imagen_formulario" />
                </div>

                <div id="body_registro">


                    <form action="admin/registroSuccess" method="post">

                        <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" class="form-control" placeholder="Nombre" name="name" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>


                        <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
                        <label for="role" name="role">Seleccionar nivel Usuario:</label>
                            <input type="text" class="form-control" placeholder="Rol" name="role" required>
                           <!-- <select class="form-control">
                                <option name="role" value="author">User</option>
                                <option name="role" value="admin">Admin</option>
                            </select>-->

                            <!--<select multiple name="role">
                            <option value="1">User</option>
                            <option value="2">Admin</option>
                        </select> -->
                            </div>

                        <!--  <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
                           <input type="file" name="fotoPerfil"/>
                            <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                         </div>
                    -->
                        <input type="hidden" name="_token" value="{{csrf_token()}}">



                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar Usuario</button>
                            </div>

                        </div>
                    </form>


                    @if($errors->any())

                        <ol style="color:red">
                            @foreach($errors->all()as $error)
                            <li>{{$error}}</li>
                            @endforeach

                        </ol>

                        @endif
                </div>
        </section>
    </div>
</main>

</div>
@include('partials.admin.footer');