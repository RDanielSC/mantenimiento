
@extends('layouts.app')

@section('htmlheader_title')
    Editar Operador
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
                                        Editar Operador @endsection

    </h1>
{{--------}}


@include('partials.messages')


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Equipo</h3>
        </div>
        <div class="panel-body">
            {!!Form::model($operadores,['route'=>['operador.update',$operadores->Operador_ID],'method'=>'PUT']) !!}

                <div class="col-xs-3">
                    {!! form::label('Nombre') !!}
                    {!! form::text('Nombre',null,['id'=>'Nombre','class'=>'form-control','placeholder'=>'']) !!}
                    {{--<input type="text" class="form-control" name="TAGEQ" id="tageq" placeholder="Ej. 3P-1201">--}}
                </div>
                <div class="col-xs-6">
                    {!! form::label('Llave') !!}
                    {!! form::text('Llave',null,['id'=>'Llave','class'=>'form-control','placeholder'=>'Digite descripcion del equipo']) !!}

                   {{-- <label>Descripción</label>
                    <input type="text" id="descripcionEq" name="descripcionEq" class="form-control" placeholder="Enter ...">--}}
                </div>
                {{--<div class="col-xs-4">
                    <label>TAG</label>
                    <input type="text" class="form-control" placeholder=".col-xs-4">
                </div>--}}

                <div class="col-xs-3">
                    {!!form::label('Cargo') !!}
                    {!!form::select('Cargo_ID',$cargos,null,['id'=>'Cargo_ID','class'=>'form-control']) !!}
                    {{--<label>Area</label>
                    <select class="form-control" name="area[]">
                        <option value="1">A-300</option>
                        <option value="2">A-301</option>
                        <option value="3">A-302</option>
                        <option value="4">A-303</option>
                        <option value="5">A-304</option>
                        <option value="6">A-320</option>
                        <option value="7">A-321</option>
                        <option value="8">A-322</option>
                        <option value="9">A-323</option>
                        <option value="10">A-324</option>
                        <option value="11">A-325</option>
                        <option value="12">A-326</option>
                        <option value="13">A-330</option>
                        <option value="14">A-331</option>
                    </select>--}}
                </div>

                <div class="form-group">
                    {!!form::label('Gerencia') !!}
                    {!!form::select('Gerencia_ID',$gerencias,null,['id'=>'Gerencia_ID','class'=>'form-control']) !!}
                    {{--<label>Sistema</label>
                    <select class="form-control" name="sistema[]">
                        <option value="1">A300 UNIDAD CRUDO DE 6000BBLS</option>
                        <option value="2">A301 UNIDAD DE CRUDO 18000BBLS</option>
                        <option value="3">A302 URC 3400BBLS</option>
                        <option value="4">EFLUENTES</option>
                        <option value="5">PLANTA DE SERVICIOS TECNICOS</option>
                        <option value="6">SISTEMA DE CONDENSADO</option>
                        <option value="7">SISTEMA DE FLARE</option>
                        <option value="8">SISTEMA DE AIRE COMPRIMIDO</option>
                        <option value="9">SISTEMA DE ENERGIA ELECTRICA</option>
                        <option value="10">BOMBA</option>
                        <option value="11">SISTEMA DE AGUA</option>
                        <option value="12">SISTEMA DE GENERACION DE VAPOR</option>
                        <option value="13">A304 UNIDAD DE ISOMERIZACION(PENEX)</option>
                        <option value="14">A304 UNIDAD DE ISOMERIZACION(NHT)</option>
                        <option value="15">A321 TANQUES DE ALMACENAJE (CRUDO Y PRODUCTO INTER...</option>
                        <option value="16">A322 TANQUES DE ALMACENAJE(AREA VERDE)</option>
                        <option value="17">A323 TANQUES DE ALMACENAJE(PRODUCTO TERMINADO)</option>
                        <option value="18">A324 YPFB LOGISTICA</option>
                        <option value="19">A325 SISTEMA QUEMADO GAS AL FLARE</option>
                        <option value="20">A326 AREA CARGADERO DE CISTERNAS</option>
                        <option value="21">A330 TALLERES,ALMACENES,ARCHIVO TECNICO,OFINAS ADM...</option>
                        <option value="22">A331 SISTEMA DRENAJE Y SLOP</option>
                        <option value="23">A350 SENDA SLEEPERS</option>
                        <option value="24">A400 INSTALACION EN OPVV Y AEROPUERTO</option>
                        <option value="25">MISCELANEOS</option>

                    </select>--}}
                </div>
                <div class="form-group">
                    {!!form::label('Area') !!}
                    {!!form::select('Area_ID',$areas,null,['id'=>'Area_ID','class'=>'form-control']) !!}
                    {{--<label>Subsistema</label>
                    <select class="form-control">
                        <option value="1">REDESTILADO</option>
                        <option value="2">ISOPENTANO</option>
                        <option value="3">DESTILACION ATMOSFERICA</option>
                        <option value="4">SPLITTER DE NAFTA</option>
                        <option value="5">UNIDAD DE RECUPERACION DE GASES</option>
                        <option value="6">TRATAMIENTO DE JET FUEL SISTEMA ANTIGUO</option>
                        <option value="7">TRATAMIENTO DE JET FUEL SISTEMA NUEVO</option>
                        <option value="8">PLATFORMING</option>
                        <option value="9">UNIDAD DE COMBUSTIBLE LIQUIDO</option>
                        <option value="10">UNIDAD DE COMBUSTIBLE GASEOSO</option>
                        <option value="11">UNIDAD DE GAS NATURAL</option>
                        <option value="12">SISTEMA DE AGUA DE ENFRIAMIENTO</option>
                        <option value="13">SISTEMA DE AGUA CRUDA</option>
                        <option value="14">SISTEMA DE TRATAMIENTO DE AGUA</option>
                        <option value="15">SISTEMA DE AGUA POTABLE</option>
                        <option value="16">SISTEMA DE GASES DEL FLARE</option>
                        <option value="17">SISTEMA  DE SERVICIOS AIRE DE INSTRUMENTOS</option>
                        <option value="18">SISTEMA GENERAL DE TOMACORRIENTE</option>
                        <option value="19">SISTEMA GENERAL DE TOMACORRIENTES</option>
                        <option value="20">SISTEMA GENERAL DE ILUMINACION GENERAL RSCZ</option>
                        <option value="21">SISTEMA GENERAL DE TOMACORRIENTES RSCZ</option>
                        <option value="22">SISTEMA PUESTA A TIERRA</option>
                        <option value="23">SIST. SERVICIOS E.E. DE RESPALDO</option>
                        <option value="24">SIST. SERVICIO E.E. PRINCIPAL</option>
                        <option value="25">AREA DE TANQUES</option>
                        <option value="26">OLEODUCTO PALMASOLA VIRU VIRU</option>
                        <option value="27">HYDROBON</option>

                    </select>
--}}

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
                    document.location.href = "{{url('operador')}}";
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

