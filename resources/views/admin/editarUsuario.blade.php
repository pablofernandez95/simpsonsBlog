@include('partials.admin.header');


<main class="container">
    <div id="contenedor" >
    <div class="register-box">
        <div class="register-logo">

        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Editar usuario</p>

            {!!Form::model($user,['action' => ['RegisterController@submitUserRegister',$user->id],'method'=> 'PUT'])!!}

                <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">

                    {!!  Form::label('name','Nombre')!!}
                    {!! Form::text('name',null,['class' => 'form-control','required','placeholder' => 'Nombre']) !!}
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>


                <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
                    {!!  Form::label('email','Correo')!!}
                    {!! Form::text('email',null,['class' => 'form-control','required','placeholder' => 'Email']) !!}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">

                    {!! Form::label('password','Contraseña') !!}
                    {!! Form::password('password',['class' => 'form-control','required','placeholder' => 'Contraseña'])!!}

                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <!--  <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
                   <input type="file" name="fotoPerfil"/>
                    <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                 </div>
            -->



                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {!!  Form::submit('Editar',['class' => 'btn btn-primary btn-block btn-flat'])!!}

                    </div>
            {!! Form::close() !!}
                </div>




            @if($errors->any())

                <ol style="color:red">
                    @foreach($errors->all()as $error)
                        <li>{{$error}}</li>
                    @endforeach

                </ol>

            @endif
        </div>
    </div>

</main>

</div>
@include('partials.admin.footer');