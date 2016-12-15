
@extends('layouts.app')

@section('htmlheader_title')
    Nuevo Equipo
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
                                        Nuevo Equipo @endsection

    </h1>
{{--------}}
@include('partials.messages')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Agregar Equipo</h3>
        </div>
        <div class="panel-body">
            {!!Form::open(['route'=>'equipo.store','method'=>'POST']) !!}

                <div class="col-xs-3">
                    {!! form::label('TAG') !!}
                    {!! form::text('Tag',null,['id'=>'Tag','class'=>'form-control','placeholder'=>'Ej. 3P-1201']) !!}
                </div>
                <div class="col-xs-6">
                    {!! form::label('Descripcion') !!}
                    {!! form::text('Descripcion',null,['id'=>'Descripcion','class'=>'form-control','placeholder'=>'Digite descripcion del equipo']) !!}

                </div>
                <div class="col-xs-3">
                    {!!form::label('Areas') !!}
                    {!!form::select('Area_ID',$areas,null,['id'=>'Area_ID','class'=>'form-control']) !!}

                </div>

                <div class="form-group">
                    {!!form::label('Sistemas') !!}
                    {!!form::select('Sistema_ID',$sistemas,null,['id'=>'Sistema_ID','class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!!form::label('SubSistemas') !!}
                    {!!form::select('SubSistema_ID',$subsistemas,null,['id'=>'SubSistema_ID','class'=>'form-control']) !!}


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
                    document.location.href = "{{url('equipo')}}";
                })
            </script>
                {!!form::close()!!}

        </div>
        <!-- /.box-body -->
    </div>



    <div class="row">

    </div>



@endsection

