
@extends('layouts.app')

@section('htmlheader_title')
    Eliminar Usuario
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title') Usuario @endsection

    </h1>
{{--------}}





    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Eliminar

                Usuario</h3>
        </div>
        <div class="panel-body">

            {!!Form::open(['route'=>['usuario.destroy',$users->id],'method'=>'DELETE']) !!}
            <div class="form-grup">
                <label for="exampleInputPassword1">DESEA ELIMINAR ESTE USUARIO:</label>
            </div>
            <div class="form-group">
                {!! form::label('Descripcion') !!}
                {{--{!! $documentaciones->Descripcion!!}--}}
            </div>
            <div class="form-group">
                {!! form::label('Documento') !!}
                {{--{!! $documentaciones->urlDoc!!}--}}
            </div>


            {!! form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>',
                'class'=>'btn btn-danger btn-sm m-t-10']) !!}
            <button type="button" id="cancelar" name="cancelar" class="btn btn-info btn-sm m-t-10" >Cancelar</button>
            <script>
                $("#cancelar").click(function (event)
                {
                    document.location.href = "{{url('documentacion')}}";
                })
            </script>

        </div>
        <!-- /.box-body -->
    </div>






    {{---------}}



    <!-- Main component for a primary marketing message or call to action -->
    <div class="row">

    </div>



@endsection

