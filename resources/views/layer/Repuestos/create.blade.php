
@extends('layouts.app')

@section('htmlheader_title')
    Nuevo Repuesto
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
                                        Nuevo Repuesto @endsection

    </h1>
{{--------}}
@include('partials.messages')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Agregar Repuesto</h3>
        </div>
        <div class="panel-body">
            {!!Form::open(['route'=>'repuesto.store','method'=>'POST','files'=>true]) !!}

                <div class="col-xs-8">
                    {!! form::label('Repuesto') !!}
                    {!! form::text('Descripcion',null,['id'=>'Descripcion','class'=>'form-control','placeholder'=>'Digite el nombre del repuesto']) !!}
                </div>
                <div class="col-xs-4">
                    {!! form::label('N° de Parte') !!}
                    {!! form::text('NoParte',null,['id'=>'NoParte','class'=>'form-control','placeholder'=>'Digite el numero de partes']) !!}

                </div>
            <hr>
            <br>
                <div class="col-xs-12">
                    {!!form::label('Descripcion') !!}
                    {!! form::text('Dimension',null,['id'=>'Dimension','class'=>'form-control','placeholder'=>'Digite el numero de partes']) !!}

                </div>
            <hr>
            <br>
            <br>
            <br>

                <div class="form-group col-xs-8">
                    {!!form::label('Equipo') !!}
                    {!!form::select('Equipo_ID',$equipos,['id'=>'Equipo_ID','class'=>'form-control col-md-4 ']) !!}

                </div>
            <div class=" form-group col-xs-4">
                {!!form::label('Imagen','Seleccionar Imagen :') !!}
                {!!form::file('imgrepuesto') !!}

            </div>




                <hr>
                <br>
               {{-- <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Agregar</button>
                </div>--}}
                {!! form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
            <button type="button" id="cancelar" name="cancelar" class="btn btn-info btn-sm m-t-10" >Cancelar</button>
            <script>
                $("#cancelar").click(function (event)
                {
                    document.location.href = "{{url('repuesto')}}";
                })
            </script>
            {!!form::close()!!}

        </div>
        <!-- /.box-body -->
    </div>



    <div class="row">

    </div>



@endsection

