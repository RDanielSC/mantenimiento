
@extends('layouts.app')

@section('htmlheader_title')
    {!! $equipos->Tag!!}
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
            {!! $equipos->Tag!!}
        @endsection

    </h1>
    {{--------}}
    {!!Form::open(['route'=>'aeroenfriador.store','method'=>'POST']) !!}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Aeroenfriador</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                {!!form::label('Aeroenfriador: ') !!}
                {!! $equipos->Descripcion!!}
                {!!form::label('Tag') !!}
                {!! $equipos->Tag!!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Servicio') !!}
                {!!$aeroenfriadores->DAEServicio!!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Año de Fabricacion') !!}
                {!!$aeroenfriadores->DAEAñoFab!!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!!$aeroenfriadores->DAEMarca!!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!!$aeroenfriadores->DAEModelo!!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Temperatura') !!}
                {!!$aeroenfriadores->DAETemperatura!!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Liquido') !!}
                {!!$aeroenfriadores->DAELiquido!!}

            </div>

            <hr>
            <br>
            {{-- <div class="box-footer">
                 <button type="submit" class="btn btn-info pull-right">Agregar</button>
             </div>--}}


        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ventilador</h3>
        </div>
        <div class="panel-body">

            <div class="col-xs-6">
                {!! form::label('Tipo') !!}
                {!!$aeroenfriadores->DAEVTipo!!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Diametro') !!}
                {!!$aeroenfriadores->DAEVDiametro!!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!!$aeroenfriadores->DAEVRPM!!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Kw') !!}
                {!!$aeroenfriadores->DAEVKW!!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Aspa/Ventilador') !!}
                {!!$aeroenfriadores->DAEVAspa_Ventilador!!}
            </div>


        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Turbina</h3>
        </div>
        <div class="panel-body">

            <div class="col-xs-6">
                {!! form::label('Kw') !!}
                {!!$aeroenfriadores->DAETKW!!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!!$aeroenfriadores->DAETMarca!!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Tipo') !!}
                {!!$aeroenfriadores->DAETTipo!!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Frecuencia') !!}
                {!!$aeroenfriadores->DAETFrecuencia!!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!!$aeroenfriadores->DAETRPM!!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Volts') !!}
                {!!$aeroenfriadores->DAETVolts!!}
            </div>


        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Reductor de Velocidad</h3>
        </div>
        <div class="panel-body">

            <div class="col-xs-6">
                {!! form::label('Tipo') !!}
                {!!$aeroenfriadores->DAERTipo!!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!!$aeroenfriadores->DAERModel!!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Ratio') !!}
                {!!$aeroenfriadores->DAERRatio!!}
            </div>
            <div class="col-xs-6">
                {!! form::label('MRF') !!}
                {!!$aeroenfriadores->DAERMFR!!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Correa') !!}
                {!!$aeroenfriadores->DAERCorreas!!}
            </div>
            <br>
            <hr>
            {!! form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
            {!!form::close()!!}
        </div>
        <!-- /.box-body -->
    </div>




    <div class="row">

    </div>



@endsection

