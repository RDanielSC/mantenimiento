
@extends('layouts.app')

@section('htmlheader_title')
    Editar Repuesto
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
                                        Editar Documentacion @endsection

    </h1>
{{--------}}


@include('partials.messages')


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar </h3>
        </div>
        <div class="panel-body">
            {!!Form::model($documentaciones,['route'=>['documentacion.update',$documentaciones->Doc_ID],'method'=>'PUT','files'=>true]) !!}

            <div class="col-xs-12">
                {!! form::label('Descripcion del Documento:') !!}
                {!! form::text('Descripcion',null,['id'=>'Descripcion','class'=>'form-control','placeholder'=>'Digite el nombre del repuesto']) !!}
            </div>
            <div class="col-xs-12">
                {!!form::label('Equipo:') !!}
                {!!form::select('Equipo_ID',$equipos,['id'=>'Equipo_ID','class'=>'form-control col-md-4 ']) !!}

            </div>
            <hr>
            <br>
            <div class=" form-group col-xs-4">
                {!!form::label('Documento','Seleccionar el Documento :') !!}
                {!!form::file('urlDoc') !!}

            </div>
               {{-- <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Agregar</button>
                </div>--}}
                {!! form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}

            <button type="button" id="cancelar" name="cancelar" class="btn btn-info btn-sm m-t-10" >Cancelar</button>
            <script>
                $("#cancelar").click(function (event)
                {
                    document.location.href = "{{url('documentacion')}}";
                })
            </script>
            {!!form::close()!!}

        </div>
        <!-- /.box-body -->
    </div>






    {{---------}}



    <!-- Main component for a primary marketing message or call to action -->
    <div class="row">

    </div>



@endsection

