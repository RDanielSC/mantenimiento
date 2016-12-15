
@extends('layouts.app')

@section('htmlheader_title')
    Eliminar Repuesto
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
                                        Eliminar Repuesto @endsection

    </h1>
{{--------}}





    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Repuesto</h3>
        </div>
        <div class="panel-body">

            {!!Form::open(['route'=>['repuesto.destroy',$repuestos->Repuesto_ID],'method'=>'DELETE']) !!}
            <div class="form-grup">
                <label for="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO:</label>
            </div>
            <div class="form-group">
                {!! form::label('Repuesto') !!}
                {!! $repuestos->Descripcion!!}
            </div>
            <div class="form-group">
                {!! form::label('Nro de Parte') !!}
                {!! $repuestos->NoParte!!}
            </div>
            <div class="form-group">
                {!! form::label('Descripcion') !!}

            </div>

            {!! form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>',
                'class'=>'btn btn-danger btn-sm m-t-10']) !!}
            <button type="button" id="cancelar" name="cancelar" class="btn btn-info btn-sm m-t-10" >Cancelar</button>
            <script>
                $("#cancelar").click(function (event)
                {
                    document.location.href = "{{url('repuesto')}}";
                })
            </script>

        </div>
        <!-- /.box-body -->
    </div>






    {{---------}}



    <!-- Main component for a primary marketing message or call to action -->
    <div class="row">

    </div>



@endsection

