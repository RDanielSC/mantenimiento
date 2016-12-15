
@extends('layouts.app')

@section('htmlheader_title')
    Editar Aeroenfriador
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
            Editar Aeroenfriador
        @endsection

    </h1>
    {{--------}}
    {!!Form::model($aeroenfriadores,['route'=>['aeroenfriador.update',$aeroenfriadores->Aeroenfriador_ID],'method'=>'PUT']) !!}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Aeroenfriador</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                {!!form::label('Seleccion de Equipo') !!}
                {!!form::select('Equipo_ID',$equipos,null,['id'=>'Equipo_ID','class'=>'form-control']) !!}
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
                {!! form::text('DAETemperatura',null,['id'=>'DAETemperatura','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Liquido') !!}
                {!! form::text('DAELiquido',null,['id'=>'DAELiquido','class'=>'form-control','placeholder'=>'Digite descripcion del equipo']) !!}

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
                {!! form::text('DAEVTipo',null,['id'=>'DAEVTipo','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Diametro') !!}
                {!! form::text('DAEVDiametro',null,['id'=>'DAEVDiametro','class'=>'form-control','placeholder'=>'Digite descripcion del equipo']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!! form::text('DAEVRPM',null,['id'=>'DAEVRPM','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Kw') !!}
                {!! form::text('DAEVKW',null,['id'=>'DAEVKW','class'=>'form-control','placeholder'=>'Digite descripcion del equipo']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Aspa/Ventilador') !!}
                {!! form::text('DAEVAspa_Ventilador',null,['id'=>'DAEVAspa_Ventilador','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
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
                {!! form::text('DAETKW',null,['id'=>'DAETKW','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Marca') !!}
                {!! form::text('DAETMarca',null,['id'=>'DAETMarca','class'=>'form-control','placeholder'=>'Digite descripcion del equipo']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Tipo') !!}
                {!! form::text('DAETTipo',null,['id'=>'DAETTipo','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Frecuencia') !!}
                {!! form::text('DAETFrecuencia',null,['id'=>'DAETFrecuencia','class'=>'form-control','placeholder'=>'Digite descripcion del equipo']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('RPM') !!}
                {!! form::text('DAETRPM',null,['id'=>'DAETRPM','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Volts') !!}
                {!! form::text('DAETVolts',null,['id'=>'DAETVolts','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
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
                {!! form::text('DAERTipo',null,['id'=>'DAERTipo','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('Modelo') !!}
                {!! form::text('DAERModel',null,['id'=>'DAERModel','class'=>'form-control','placeholder'=>'Digite descripcion del equipo']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Ratio') !!}
                {!! form::text('DAERRatio',null,['id'=>'DAERRatio','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
            </div>
            <div class="col-xs-6">
                {!! form::label('MRF') !!}
                {!! form::text('DAERMFR',null,['id'=>'DAERMFR','class'=>'form-control','placeholder'=>'Digite descripcion del equipo']) !!}

            </div>
            <br>
            <hr>
            <div class="col-xs-6">
                {!! form::label('Correa') !!}
                {!! form::text('DAERCorreas',null,['id'=>'DAERCorreas','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
            </div>
            <br>
            <hr>
            {!! form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
            <button type="button" id="cancelar" name="cancelar" class="btn btn-info btn-sm m-t-10" >Cancelar</button>
            <script>
                $("#cancelar").click(function (event)
                {
                    document.location.href = "{{url('aeroenfriador')}}";
                })
            </script>
            {!!form::close()!!}
        </div>
        <!-- /.box-body -->
    </div>


@endsection

    <div class="row">

    </div>





