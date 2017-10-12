@include('partials.home.header');
<base href="{!! asset("") !!}">
<main class="container">
    <div id="contenedor" >
        <section class="row">
            <div class="register-box col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2 class="text-primary">Tu registro ha sido exitoso!!!</h2>
                <div class="register-logo">
                    <img src="imagenes/imagen_registro_success.jpg"  class="img-responsive logos"alt="imagen_formulario" />
                </div>

                <h3>Felicidades ahora eres parte de esta grandiosa comunidad!!!</h3>
                <p>Ahora tendras acceso a todo el contenido de la WEB y ademas podras compartir todos tus conociminentos de los simpsons con todo el mundo.</p>


                <a id="boton" href="{{URL::to('/login')}}" class="btn btn-primary">Logueate</a>

                </div>
        </section>
    </div>
</main>

</div>
@include('partials.home.footer');