
@extends('layouts.app')

@section('htmlheader_title')
    Historial
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
            Nuevo Registro @endsection

    </h1>
    {{--------}}
    @include('partials.messages')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Agregar Equipo</h3>
        </div>
        <div class="panel-body">
            {!!Form::open(['route'=>'historial.store','method'=>'PUT','files'=>true]) !!}

            <div class="col-xs-12">
                {!! form::label('Descripcion') !!}
                {!! form::text('Descripcion',null,['id'=>'Descripcion','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <hr>
            <div class="col-xs-12">
                {!! form::label('Descripcion') !!}
                {!! form::text('Descripcion',null,['id'=>'Descripcion','class'=>'form-control','placeholder'=>'']) !!}
            </div>

            <div class="col-xs-12">
                {!! form::label('Comentario') !!}
                {!! form::textarea('Comentario',null,['id'=>'Comentario','class'=>'form-control','placeholder'=>'','rows'=>'5','cols'=>'50']) !!}
            </div>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Fecha de Inicio') !!}
                {!! form::date('FechaInicio',null,['id'=>'FechaInicio','class'=>'form-control']) !!}

            </div>
            <div class="col-xs-6">
                {!!form::label('Fecha Fin') !!}
                {!!form::date('FechaFin',null,['id'=>'FechaFin','class'=>'form-control','placeholder'=>'YYYY-MM-DD', 'required pattern'=>'[0-9]{4}-[0-9]{2}-[0-9]{2}'])!!}


            </div>
            <hr>
            <div class="form-group col-xs-12">
                {!!form::label('Equipo') !!}
                {!!form::select('Equipo_ID',$equipos,null,['id'=>'Equipo_ID','class'=>'form-control']) !!}
            </div>

            <div class="form-group col-xs-12">
                {!!form::label('Operador') !!}
                {!!form::select('Operador_ID',$operadores,null,['id'=>'Operador_ID','class'=>'form-control']) !!}

            </div>
            <div class="form-group col-xs-12">
                {!!form::label('Repuesto') !!}
                {!!form::select('Repuesto_ID',$repuestos,null,['id'=>'Repuesto_ID','class'=>'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!!form::label('Tipo de Mantenimiento') !!}
                {!!form::select('TipoMan_ID',$tipomans,null,['id'=>'TipoMan_ID','class'=>'form-control']) !!}
            </div>

            <div class=" form-group">
                {!!form::label('Documentacion','Guardar Documentacion:') !!}
                {!!form::file('path') !!}

            </div>
            <hr>
            <br>
            <br>
            <hr>
            {{-- <div class="box-footer">
                 <button type="submit" class="btn btn-info pull-right">Agregar</button>
             </div>--}}
            {!! form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm col-xs-12'])!!}
            {!!form::close()!!}

        </div>
        <!-- /.box-body -->
    </div>



    <div class="row">

    </div>



@endsection

