
@extends('layouts.app')

@section('htmlheader_title')
    Nuevo Aeroenfriador
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
            Nuevo Aeroenfriador
        @endsection

    </h1>

    {{--------}}
    {!!Form::open(['route'=>'aeroenfriador.store','method'=>'POST']) !!}



    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Aeroenfriador</h3>


            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <div class="form-group">
                {!!form::label('Equipo','Seleccion de Equipo') !!}
                {!!form::select('Equipo_ID',$equipos,null,['class'=>'form-control']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Servicio') !!}
                {!! form::text('DAEServicio',null,['id'=>'DAEServicio','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Año de Fabricacion') !!}
                {!! form::text('DAEAñoFab',null,['id'=>'DAEAñoFab','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('DAEMarca',null,['id'=>'Tag','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!! form::text('DAEModelo',null,['id'=>'DAEModelo','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Temperatura') !!}
                {!! form::text('DAETemperatura',null,['id'=>'DAETemperatura','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            {{--<div class="col-xs-6">
                {!! form::label('Liquido') !!}
                {!! form::text('DAELiquido',null,['id'=>'DAELiquido','class'=>'form-control','placeholder'=>'']) !!}

            </div>--}}

            <hr>
            <br>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Ventilador</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Tipo') !!}
                {!! form::text('DAEVTipo',null,['id'=>'DAEVTipo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Diametro') !!}
                {!! form::text('DAEVDiametro',null,['id'=>'DAEVDiametro','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!! form::text('DAEVRPM',null,['id'=>'DAEVRPM','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Kw') !!}
                {!! form::text('DAEVKW',null,['id'=>'DAEVKW','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Cantidad de Aspas del Ventilador') !!}
                {!! form::text('DAEVAspa_Ventilador',null,['id'=>'DAEVAspa_Ventilador','class'=>'form-control','placeholder'=>'']) !!}
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Equipo de Accionamiento - Turbina</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Kw') !!}
                {!! form::text('DAETKW',null,['id'=>'DAETKW','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('DAETMarca',null,['id'=>'DAETMarca','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Tipo') !!}
                {!! form::text('DAETTipo',null,['id'=>'DAETTipo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
           {{-- <div class="col-xs-6">
                {!! form::label('Frecuencia') !!}
                {!! form::text('DAETFrecuencia',null,['id'=>'DAETFrecuencia','class'=>'form-control','placeholder'=>'']) !!}

            </div>--}}
            <div class="col-xs-6">
                {!! form::label('Volts') !!}
                {!! form::text('DAETVolts',null,['id'=>'DAETVolts','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!! form::text('DAETRPM',null,['id'=>'DAETRPM','class'=>'form-control','placeholder'=>'']) !!}
            </div>


        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Equipo de Accionamiento - Motor</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Kw') !!}
                {!! form::text('DAEMhp',null,['id'=>'DAEMhp','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('DAEMmarca',null,['id'=>'DAEMmarca','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Tipo') !!}
                {!! form::text('DAEMtipo',null,['id'=>'DAEMtipo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Frecuencia') !!}
                {!! form::text('DAEMfrecuencia',null,['id'=>'DAEMfrecuencia','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!! form::text('DAEMrpm',null,['id'=>'DAEMrpm','class'=>'form-control','placeholder'=>'']) !!}
            </div>

            <div class="col-xs-6">
                {!! form::label('Volts') !!}
                {!! form::text('DAEMvolts',null,['id'=>'DAEMvolts','class'=>'form-control','placeholder'=>'']) !!}
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Reductor de Velocidad</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Tipo') !!}
                {!! form::text('DAERTipo',null,['id'=>'DAERTipo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!! form::text('DAERModel',null,['id'=>'DAERModel','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Ratio') !!}
                {!! form::text('DAERRatio',null,['id'=>'DAERRatio','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('MRF') !!}
                {!! form::text('DAERMFR',null,['id'=>'DAERMFR','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Correa') !!}
                {!! form::text('DAERCorreas',null,['id'=>'DAERCorreas','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>

        </div>
        <!-- /.box-body -->
    </div>
    <div class="pull-right">
        {!! form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning  btn-sm m-t-10'])!!}
        <button type="button" id="cancelar" name="cancelar" class="btn btn-info btn-sm m-t-10" >Cancelar</button>
        <script>
            $("#cancelar").click(function (event)
            {
                document.location.href = "{{url('aeroenfriador')}}";
            })
        </script>
        {!!form::close()!!}
    </div>



@endsection

