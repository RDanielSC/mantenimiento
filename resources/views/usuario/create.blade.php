
@extends('layouts.app')

@section('htmlheader_title')
    Nuevo Usuario
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
                                        Nuevo Usuario @endsection

    </h1>
{{--------}}
@include('partials.messages')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Agregar Usuario</h3>
        </div>
        {{--{!!Form::model($documentaciones,['route'=>['documentacion.store',$documentaciones->Doc_ID],'method'=>'PUT','files'=>true]) !!}--}}
        <div class="panel-body">
            {!!Form::open(['route'=>'usuario.store','method'=>'POST']) !!}

                <div class="form-group">
                    {!! form::label('name','Nombre:') !!}
                    {!! form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Nombre completo']) !!}
                </div>

                <div class="form-group">
                        {!!form::label('email','Llave') !!}
                        {!!form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Llave de Usuario']) !!}

                </div>
                <div class=" form-group">
                {!!form::label('password','Contraseña:') !!}
                {!!form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'*******','required']) !!}
                 </div>
            <div class="form-group">
                {!!form::label('type','Tipo') !!}
                {!!form::select('type',[''=>'Selecione nivel..','user'=>'Usuario','admin'=>'Administrador'],null,['class'=>'form-comtrol']) !!}

            </div>

<div class="form-group">
{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    <button type="button" id="cancelar" name="cancelar" class="btn btn-info btn-sm m-t-10" >Cancelar</button>
</div>


                <hr>
                <br>
               {{-- <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Agregar</button>
                </div>--}}


            <script>
                $("#cancelar").click(function (event)
                {
                    document.location.href = "{{url('usuario')}}";
                })
            </script>
            {!!form::close()!!}

        </div>
        <!-- /.box-body -->
    </div>



    <div class="row">

    </div>



@endsection
