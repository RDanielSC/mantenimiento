
@extends('layouts.app')

@section('htmlheader_title')
    Compresor
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
            Nuevo Compresor
        @endsection

    </h1>

    {{--------}}
    {!!Form::open(['route'=>'compresor.store','method'=>'POST']) !!}



    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title"> Datos de Operacion del Compresor</h3>


            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                {!!form::label('Seleccion de Equipo') !!}
                {!!form::select('Equipo_ID',$equipos,null,['id'=>'Equipo_ID','class'=>'form-control']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Accionador') !!}
                {!! form::text('CoDoAccionador',null,['id'=>'CoDoAccionador','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Servicio') !!}
                {!! form::text('CoDoServicio',null,['id'=>'CoDoServicio','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Año de fabricacion') !!}
                {!! form::text('CoDoAÃ±oFab',null,['id'=>'CoDoAÃ±oFab','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('CoDoMarca',null,['id'=>'CoDoMarca','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!! form::text('CoDoModelo',null,['id'=>'CoDoModelo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Numero de Serie') !!}
                {!! form::text('CoDoNoSerie',null,['id'=>'CoDoNoSerie','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Capacidad de Entrada') !!}
                {!! form::text('CoDoCapacEntrada',null,['id'=>'CoDoCapacEntrada','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Temperatura de Entrada') !!}
                {!! form::text('CoDoTempEntrada',null,['id'=>'CoDoTempEntrada','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Temperatura MAX Desc.') !!}
                {!! form::text('CoDoTempMaxDesc',null,['id'=>'CoDoTempMaxDesc','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Presion de Entrada Nominal') !!}
                {!! form::text('CoDoPresEntradaNominal',null,['id'=>'CoDoPresEntradaNominal','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Presion de Descarga Nominal') !!}
                {!! form::text('DCPreDescargaNominal',null,['id'=>'DCPreDescargaNominal','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Presion Max Descarga') !!}
                {!! form::text('CoDoPresMaxDescarga',null,['id'=>'CoDoPresMaxDescarga','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Velocidad Nominal (100%)') !!}
                {!! form::text('CoDoVelNo',null,['id'=>'CoDoVelNo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Velocidad Max Continua') !!}
                {!! form::text('CoDoVelMaxContinua',null,['id'=>'CoDoVelMaxContinua','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Tamaño') !!}
                {!! form::text('CoDoTamaño',null,['id'=>'CoDoTamaño','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Maxima Road Load') !!}
                {!! form::text('CoDoMaxRodLoad',null,['id'=>'CoDoMaxRodLoad','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Orientacion') !!}
                {!! form::text('CoDoOrientacion',null,['id'=>'CoDoOrientacion','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Industria') !!}
                {!! form::text('CoDoIndustria',null,['id'=>'CoDoIndustria','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Tipo de Mantenimiento') !!}
                {!! form::text('CoDoTipodeMan',null,['id'=>'CoDoTipodeMan','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Importancia del Proceso') !!}
                {!! form::text('CoDoImporProce',null,['id'=>'CoDoImporProce','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Estado') !!}
                {!! form::text('CoDoEstado',null,['id'=>'CoDoEstado','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Tipo de Lubricacion') !!}
                {!! form::text('CoDoTipoLub',null,['id'=>'CoDoTipoLub','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Capacidad de Lubricante') !!}
                {!! form::text('CoDoCapLub',null,['id'=>'CoDoCapLub','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Ciclo de Trabajo') !!}
                {!! form::text('CoDoCicloTrab',null,['id'=>'CoDoCicloTrab','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Ciclos Semanales') !!}
                {!! form::text('CoDoCicloSema',null,['id'=>'CoDoCicloSema','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Ubicacion Tecnica') !!}
                {!! form::text('CoDoUbiTecni',null,['id'=>'CoDoUbiTecni','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Presion Barometrica') !!}
                {!! form::text('CoDoPresBarome',null,['id'=>'CoDoPresBarome','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Primera Velocidad Critica') !!}
                {!! form::text('CoDoPrimVelCritica',null,['id'=>'CoDoPrimVelCritica','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-12">
                {!! form::label('Observaciones') !!}
                {!! form::text('CoDoObserv',null,['id'=>'CoDoObserv','class'=>'form-control','placeholder'=>'']) !!}
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Caja Reductora</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('CoCrMarca',null,['id'=>'CoCrMarca','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Parte N° ') !!}
                {!! form::text('CoCrParteNu',null,['id'=>'CoCrParteNu','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Serie') !!}
                {!! form::text('CoCrSerie',null,['id'=>'CoCrSerie','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!! form::text('CoCrModelo',null,['id'=>'CoCrModelo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('IMPUT RPM') !!}
                {!! form::text('CoCrImput_RPM',null,['id'=>'CoCrImput_RPM','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Ratio') !!}
                {!! form::text('CoCrRatio',null,['id'=>'CoCrRatio','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Cat. Rating') !!}
                {!! form::text('CoCrCat_Rating',null,['id'=>'CoCrCat_Rating','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Service Rating') !!}
                {!! form::text('CoCrService_Rating',null,['id'=>'CoCrService_Rating','class'=>'form-control','placeholder'=>'']) !!}
            </div>

        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Motor</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('CoMoMarca',null,['id'=>'CoMoMarca','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!! form::text('CoMoModelo',null,['id'=>'CoMoModelo','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('KW/HP') !!}
                {!! form::text('CoMoKWyHP',null,['id'=>'CoMoKWyHP','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!! form::text('CoMoRPM',null,['id'=>'CoMoRPM','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Frecuencia') !!}
                {!! form::text('CoMo_Frecuencia',null,['id'=>'CoMo_Frecuencia','class'=>'form-control','placeholder'=>'']) !!}
            </div>

            <div class="col-xs-6">
                {!! form::label('Volts') !!}
                {!! form::text('CoMotorVolts',null,['id'=>'CoMotorVolts','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('N° de Serie') !!}
                {!! form::text('CoMoNro_serie',null,['id'=>'CoMoNro_serie','class'=>'form-control','placeholder'=>'']) !!}
            </div>

            <div class="col-xs-6">
                {!! form::label('Rodamiento') !!}
                {!! form::text('CoMoRodamiento',null,['id'=>'CoMoRodamiento','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Observaciones') !!}
                {!! form::text('CoMoObservaciones',null,['id'=>'CoMoObservaciones','class'=>'form-control','placeholder'=>'']) !!}
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
                {!! form::label('Modelo') !!}
                {!! form::text('CoTuModelo',null,['id'=>'CoTuModelo','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('HP') !!}
                {!! form::text('CoTuHP',null,['id'=>'CoTuHP','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Presion de ingreso') !!}
                {!! form::text('CoTuPresIn',null,['id'=>'CoTuPresIn','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Temperatura de Ingreso') !!}
                {!! form::text('CoTuTempIn',null,['id'=>'CoTuTempIn','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('N° de Serie') !!}
                {!! form::text('CoTuNoSerie',null,['id'=>'CoTuNoSerie','class'=>'form-control','placeholder'=>'']) !!}
            </div>

            <div class="col-xs-6">
                {!! form::label('Velocidad de Rotacion') !!}
                {!! form::text('CoTuVelRotacion',null,['id'=>'CoTuVelRotacion','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Presion Ingreso X') !!}
                {!! form::text('CoTuPresInX',null,['id'=>'CoTuPresInX','class'=>'form-control','placeholder'=>'']) !!}
            </div>

            <div class="col-xs-6">
                {!! form::label('Temperatura Ingreso X') !!}
                {!! form::text('CoTuTempInX',null,['id'=>'CoTuTempInX','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Rodamiento') !!}
                {!! form::text('CoTuRodamiento',null,['id'=>'CoTuRodamiento','class'=>'form-control','placeholder'=>'']) !!}
            </div>

            <div class="col-xs-6">
                {!! form::label('Observaciones') !!}
                {!! form::text('CoTuObservaciones',null,['id'=>'CoTuObservaciones','class'=>'form-control','placeholder'=>'']) !!}
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Gobernador</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {{--{!! form::text('#',null,['id'=>'#','class'=>'form-control','placeholder'=>'']) !!}--}}
            </div>
            <div class="col-xs-6">
                {!! form::label('Air Signal') !!}
                {{--{!! form::text('#',null,['id'=>'#','class'=>'form-control','placeholder'=>'']) !!}--}}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Rango Velocidad Turvina') !!}
                {{--{!! form::text('#',null,['id'=>'#','class'=>'form-control','placeholder'=>'']) !!}--}}
            </div>


        </div>
        <!-- /.box-body -->
    </div>
    <div class="pull-right">
        {!! form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning  btn-sm m-t-10'])!!}
        {!!form::close()!!}
    </div>



@endsection

