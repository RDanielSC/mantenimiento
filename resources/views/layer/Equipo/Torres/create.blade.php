
@extends('layouts.app')

@section('htmlheader_title')
    Nueva Torre
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
            Nueva Torre
        @endsection

    </h1>

    {{--------}}
    {!!Form::open(['route'=>'torre.store','method'=>'POST']) !!}



    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Datos de Torre</h3>


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
                {!!form::select('Equipo_ID',$equipos,null,['id'=>'Equipo_ID','class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('DTMarca',null,['id'=>'DTMarca','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Año de Fabricación') !!}
                {!! form::text('DTAñoF',null,['id'=>'DTAñoF','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Servicio') !!}
                {!! form::text('DTServ',null,['id'=>'DTServ','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Implementos') !!}
                {!! form::text('DTImplemento',null,['id'=>'DTImplemento','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Ubicación Tecnica') !!}
                {!! form::text('DTUbiTec',null,['id'=>'DTUbiTec','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Ciclos semanales') !!}
                {!! form::text('DTciclos',null,['id'=>'DTciclos','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Orientación') !!}
                {!! form::text('DTorientacion',null,['id'=>'DTorientacion','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Industria') !!}
                {!! form::text('DTIndus',null,['id'=>'DTIndus','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Tipo de Mantenimiento') !!}
                {!! form::text('DTTipoMan',null,['id'=>'DTTipoMan','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Importancia en el Proceso') !!}
                {!! form::text('DTImport',null,['id'=>'DTImport','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Estado') !!}
                {!! form::text('DTEstado',null,['id'=>'DTEstado','class'=>'form-control','placeholder'=>'']) !!}

            </div>

            <hr>
            <br>
            <div class="col-xs-6">
                {!! form::label('Ciclo de Trabajo') !!}
                {!! form::text('DTciclodetra',null,['id'=>'DTciclodetra','class'=>'form-control','placeholder'=>'']) !!}
            </div>

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
                {!! form::label('Temperatura') !!}
                {!! form::text('DtTemperatura',null,['id'=>'DtTemperatura','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Preción de Succion') !!}
                {!! form::text('DtPresionSucc',null,['id'=>'DtPresionSucc','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Presion de Descarga') !!}
                {!! form::text('DtPresionDesc',null,['id'=>'DtPresionDesc','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Presion Diferencial') !!}
                {!! form::text('DtPresionDife',null,['id'=>'DtPresionDife','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Brida de Succion') !!}
                {!! form::text('DtBridaSucc',null,['id'=>'DtBridaSucc','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Brida de Descargo') !!}
                {!! form::text('DtBridaDesc',null,['id'=>'DtBridaDesc','class'=>'form-control','placeholder'=>'']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Placa de Obturacion') !!}
                {!! form::text('DtPlacaObtu',null,['id'=>'DtPlacaObtu','class'=>'form-control','placeholder'=>'']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Tipo de Acole') !!}
                {!! form::text('DtTipoAcople',null,['id'=>'DtTipoAcople','class'=>'form-control','placeholder'=>'']) !!}
            </div>

        </div>
        <!-- /.box-body -->
    </div>

    <div class="pull-right">
        {!! form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning  btn-sm m-t-10'])!!}
        <button type="button" id="cancelar" name="cancelar" class="btn btn-info btn-sm m-t-10" >Cancelar</button>
        <script>
            $("#cancelar").click(function (event)
            {
                document.location.href = "{{url('torre')}}";
            })
        </script>
        {!!form::close()!!}
    </div>

    <div class="row">

    </div>

@endsection

