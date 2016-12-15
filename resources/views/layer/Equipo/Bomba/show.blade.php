
@extends('layouts.app')

@section('htmlheader_title')
    Eliminar
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
                                        Eliminar  Bomba @endsection

    </h1>
{{--------}}





    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Eliminar Bomba</h3>
        </div>
        <div class="panel-body">

            {!!Form::open(['route'=>['bomba.destroy',$bombas->Bomba_ID],'method'=>'DELETE']) !!}
            <div class="form-grup">
                <label for="exampleInputPassword1">DESEA ELIMINAR ESTA BOMBA:</label>
            </div>


            {!! form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>',
                'class'=>'btn btn-danger btn-sm m-t-10']) !!}
            <button type="button" id="cancelar" name="cancelar"  class="btn btn-default btn-sm m-t-10">Cancelar</button>

        </div>
        <!-- /.box-body -->
    </div>


    <script>
        $("#cancelar").click(function (event)
        {
            document.location.href = "{{url('bomba')}}";
        })
    </script>



    {{---------}}



    <!-- Main component for a primary marketing message or call to action -->
    <div class="row">

    </div>



@endsection
