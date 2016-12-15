
@extends('layouts.app')

@section('htmlheader_title')
    Nueva Bomba
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
            Nueva Bomba
        @endsection

    </h1>

    {{--------}}
    {!!Form::open(['route'=>'bomba.store','method'=>'POST']) !!}



    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Datos de Operacion de la Bomba</h3>


            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group col-xs-12">
                {!!form::label('Seleccion de Equipo') !!}
                {!!form::select('Equipo_ID',$equipos,['id'=>'Equipo_ID','class'=>'form-control']) !!}
            </div>


            <div class="col-xs-6">
                {!! form::label('Ubicación Tecnica') !!}
                {!! form::text('DoUbicaionT',null,['id'=>'DoUbicaionT','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Servicio') !!}
                {!! form::text('DoServicio',null,['id'=>'DoServicio','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Tipo de Bomba') !!}
                {!! form::text('DoTipoBomba',null,['id'=>'DoTipoBomba','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Año de fabricación') !!}
                {!! form::text('DoAñoFab',null,['id'=>'DoAñoFab','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('DoMarca',null,['id'=>'DoMarca','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!! form::text('DoModelo',null,['id'=>'DoModelo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Serial') !!}
                {!! form::text('DoSerial',null,['id'=>'DoSerial','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Presion de Trabajo') !!}
                {!! form::text('DoPresion',null,['id'=>'DoPresion','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Caudal') !!}
                {!! form::text('DoCaudal',null,['id'=>'DoCaudal','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!! form::text('DoRpm',null,['id'=>'DoRpm','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Altura') !!}
                {!! form::text('DoAltura',null,['id'=>'DoAltura','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Orientacion') !!}
                {!! form::text('DoOrientacion',null,['id'=>'DoOrientacion','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Industria') !!}
                {!! form::text('DoIndustria',null,['id'=>'DoIndustria','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Importancia del Equipo') !!}
                {!! form::text('DoImportancia',null,['id'=>'DoImportancia','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Estado') !!}
                {!! form::text('DoEstado',null,['id'=>'DoEstado','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Tipo de Lubricante') !!}
                {!! form::text('DoTipoLub',null,['id'=>'DoTipoLub','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Capacidad de Lubricación') !!}
                {!! form::text('DoCapacidadLub',null,['id'=>'DoCapacidadLub','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Ciclo de trabajo') !!}
                {!! form::text('DoCicloTrabajo',null,['id'=>'DoCicloTrabajo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Ciclo Semanales') !!}
                {!! form::text('DoCicloSemanales',null,['id'=>'DoCicloSemanales','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Implementos') !!}
                {!! form::text('DoImplementos',null,['id'=>'DoImplementos','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Rodamientos') !!}
                {!! form::text('DoRodamientos',null,['id'=>'DoRodamientos','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>

        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Datos Tecnicos de la Bomba</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Diametro del impulsor') !!}
                {!! form::text('DoDiametroImpu',null,['id'=>'DoDiametroImpu','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Temperatura de Operacion') !!}
                {!! form::text('DtTemperatura',null,['id'=>'DtTemperatura','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Presión de Succion') !!}
                {!! form::text('DtPresionSucc',null,['id'=>'DtPresionSucc','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Brida de Succion') !!}
                {!! form::text('DtBridaSucc',null,['id'=>'DtBridaSucc','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Presion de Descarga') !!}
                {!! form::text('DtPresionDesc',null,['id'=>'DtPresionDesc','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <div class="col-xs-6">
                {!! form::label('Brida de Descarga') !!}
                {!! form::text('DtBridaDesc',null,['id'=>'DtBridaDesc','class'=>'form-control','placeholder'=>'']) !!}
            </div>



            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Presion Diferencial') !!}
                {!! form::text('DtPresionDife',null,['id'=>'DtPresionDife','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Placa de Obturacion') !!}
                {!! form::text('DtPlacaObtu',null,['id'=>'DtPlacaObtu','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Tipo de Acople') !!}
                {!! form::text('DtTipoAcople',null,['id'=>'DtTipoAcople','class'=>'form-control','placeholder'=>'']) !!}
            </div>

        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Sello de Bomba</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Sello Recomendado') !!}
                {!! form::text('DsSelloRecomendado',null,['id'=>'DsSelloRecomendado','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('API plan') !!}
                {!! form::text('DsApiplan',null,['id'=>'DsApiplan','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Sello Instalado') !!}
                {!! form::text('DsTipo',null,['id'=>'DsTipo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Cartucho de Sello') !!}
                {!! form::text('DsCartucho',null,['id'=>'DsCartucho','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Medida Nominal') !!}
                {!! form::text('DsMedidaNominal',null,['id'=>'DsMedidaNominal','class'=>'form-control','placeholder'=>'']) !!}
            </div>

           </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Datos del Motor</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Tag del Impulsor') !!}
                {!! form::text('DmTag',null,['id'=>'DmTag','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('DmMarca',null,['id'=>'DmMarca','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!! form::text('DmModelo',null,['id'=>'DmModelo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Frecuencia') !!}
                {!! form::text('DmFrecuencia',null,['id'=>'DmFrecuencia','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Volts') !!}
                {!! form::text('DmVolt',null,['id'=>'DmVolt','class'=>'form-control','placeholder'=>'']) !!}
            </div>

            <div class="col-xs-6">
                {!! form::label('KW') !!}
                {!! form::text('DmKw',null,['id'=>'DmKw','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('HP') !!}
                {!! form::text('DmHp',null,['id'=>'DmHp','class'=>'form-control','placeholder'=>'']) !!}
            </div>

            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!! form::text('DmRpm',null,['id'=>'DmRpm','class'=>'form-control','placeholder'=>'']) !!}
            </div>

        <br>
        <hr>
        <div class="col-xs-6">
            {!! form::label('Numero de Serie') !!}
            {!! form::text('DmSerial',null,['id'=>'DmSerial','class'=>'form-control','placeholder'=>'']) !!}
        </div>

        <div class="col-xs-6">
            {!! form::label('Rodamientos') !!}
            {!! form::text('DmRodamientos',null,['id'=>'DmRodamientos','class'=>'form-control','placeholder'=>'']) !!}
        </div>
        <br>
        <hr>
        <div class="col-xs-12">
            {!! form::label('Observaciones') !!}
            {!! form::text('DmObservaciones',null,['id'=>'DmObservaciones','class'=>'form-control','placeholder'=>'']) !!}
        </div>


    </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Turbina</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('KW') !!}
                {!! form::text('DtuKW',null,['id'=>'DtuKW','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('DtuMarca',null,['id'=>'DtuMarca','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Tipo') !!}
                {!! form::text('DtuTipo',null,['id'=>'DtuTipo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Presion de Entrada') !!}
                {!! form::text('DtuPentra',null,['id'=>'DtuPentra','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Presion de Salida') !!}
                {!! form::text('DtuPsalida',null,['id'=>'DtuPsalida','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('HP') !!}
                {!! form::text('DtuHP',null,['id'=>'DtuHP','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!! form::text('DtuRPM',null,['id'=>'DtuRPM','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Numero de Serie') !!}
                {!! form::text('DtuNserie',null,['id'=>'DtuNserie','class'=>'form-control','placeholder'=>'']) !!}
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
                document.location.href = "{{url('bomba')}}";
            })
        </script>
        {!!form::close()!!}
    </div>

    <div class="row">

    </div>

@endsection

