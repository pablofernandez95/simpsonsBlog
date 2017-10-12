 @include('partials.Blog.header');

<main class="container">
    <div id="contenedor" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
                    <h2 class="text-primary">Crea Tu propio Post</h2>

                        </div>
                    </div>

            {!! Form::open (array('action' => 'ImageController@store','method' => 'POST', 'files'=> 'true')) !!}

            <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
                {!!  Form::label('content','Contenido')!!}
                {!! Form::text('content',null,['class' => 'form-control','required','placeholder' => 'Escribe el contenido del post...']) !!}
                <span class="glyphicon glyphicon-text-size form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback col-xs-12 col-sm-10 col-md-10 col-lg-10">
                {!!  Form::label('image','Imagen')!!}
                {!!  Form::file('path') !!}
                <span class="glyphicon glyphicon-picture form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback col-xs-4 col-sm-4 col-md-3 col-lg-3 pull-right">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="from_user" value={!! Auth::user()->id !!}>
                {!!  Form::submit('Crear Post',['class' => 'btn btn-primary btn-block btn-flat'])!!}
            </div>
            {!! Form::close() !!}


                </div>
               <!-- <center><iframe src="http://www.botlibre.com/bot?instance=165&livechat=Live+Chat" width="500" height="500"> </iframe></center> -->
            </div>


</main>



@include('partials.Blog.footer');