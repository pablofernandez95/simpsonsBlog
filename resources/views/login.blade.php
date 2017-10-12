
@include('partials.home.header');
	
	<main class="container">
	<div id="contenedor" >
	<section class="row">
	<h2 class="text-primary">Ingresa tus datos:</h2>
	<img src="imagenes/imagen_logueo.png" alt="imagen_logueo" class="img-responsive logos"/>
		<div id="body_login">
		{!! Form::open(array('action' => 'LoginController@doLogin')) !!}

		<div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
			{!!  Form::label('email','Correo')!!}
			{!! Form::text('email',null,['class' => 'form-control','required','placeholder' => 'Correo electronico']) !!}
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>

		<div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',['class' => 'form-control','required','placeholder' => 'Contraseña'])!!}
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
			<div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
				<input type="checkbox" name="remember"> Recordar mis datos
			</div>
		<div class="form-group has-feedback col-xs-4 col-sm-4 col-md-3 col-lg-3 pull-right">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		{!!  Form::submit('Enviar',['class' => 'btn btn-primary btn-block btn-flat'])!!}
			</div>
		{!! Form::close() !!}

		</div>





</section>
	</div>

	</main>
	
	</div>
	@include('partials.home.footer');