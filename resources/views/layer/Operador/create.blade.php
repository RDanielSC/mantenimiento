
@extends('layouts.app')

@section('htmlheader_title')
    Nuevo Operador
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
                                        Nuevo Operador @endsection

    </h1>
{{--------}}
@include('partials.messages')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Agregar Operador</h3>
        </div>
        <div class="panel-body">
            {!!Form::open(['route'=>'operador.store','method'=>'POST']) !!}

                <div class="col-xs-7">
                    {!! form::label('Nombre') !!}
                    {!! form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control','placeholder'=>'Digite el nombre del operador']) !!}
                </div>
                <div class="col-xs-2">
                    {!! form::label('Llave') !!}
                    {!! form::text('Llave',null,['id'=>'Llave','class'=>'form-control','placeholder'=>'Digite llave del operador']) !!}

                </div>
            <div class="col-xs-3">
                {!!form::label('Cargo') !!}
                {!!form::select('Cargo_ID',$cargos,null,['id'=>'Cargo_ID','class'=>'form-control']) !!}

            </div>

            <div class="col-xs-3">
                {!!form::label('Gerencia') !!}
                {!!form::select('Gerencia_ID',$gerencias,null,['id'=>'Gerencia_ID','class'=>'form-control']) !!}

            </div>
            <div class="col-xs-3">
                {!!form::label('Area') !!}
                {!!form::select('Area_ID',$areas,null,['id'=>'Area_ID','class'=>'form-control']) !!}

            </div>
            <hr> <hr> <hr> <hr>

            <div class="col-xs-6 ">
                {!! form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm      '])!!}
                <button type="button" id="cancelar" name="cancelar" class="btn btn-info btn-sm m-t-10" >Cancelar</button>
                <script>
                    $("#cancelar").click(function (event)
                    {
                        document.location.href = "{{url('operador')}}";
                    })
                </script>
                {!!form::close()!!}
            </div>

               {{-- <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Agregar</button>
                </div>--}}


        </div>
        <!-- /.box-body -->
    </div>



    <div class="row">

    </div>



@endsection

