
@extends('layouts.app')

@section('htmlheader_title')
    Torre
@endsection


@section('main-content')
    {{--<link src="{{asset('/plugins/datatables/jquery.dataTables.min.css')}}"/>--}}
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <h1>
        @section('contentheader_title')
            Torre @endsection

    </h1>
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h1 class="box-title">Torres <small>Actualizados hasta hoy</small>   </h1>
                @if(Auth::user()->type == "admin")
                <p class="navbar-text navbar-right" style="margin-top: 1px ;">
                    <button type="button" id='nuevoaero' name='nuevoaero' class="btn btn-warning  navbar-btn" style="margin-bottom: 1px;
                margin-top: -5px; margin-right: 8px; padding: 3px 20px;"  >Nuevo</button>
                </p>
@endif


            </div>
            <!-- /.box-header -->
            <div class="panel-body">
                <table class="table table-hover" id="myTable">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>TAG</th>
                        <th>Torre</th>
                        <th>Area</th>
                        <th>Sistema</th>
                        <th>Subsistema</th>
                        @if(Auth::user()->type == "admin")
                        <th>Acción</th>
                        @endif
                        <th>Documnentos</th>
                    </tr>
                    </tbody>
                    @foreach($torres as $torre)
                        <tr>
                            <td >{{$torre->Torre_ID}}</td>
                            <td >{{$torre->Tag}}</td>
                            <td >{{$torre->LEQUIPO}}</td>
                            <td >{{$torre->LAREA}}</td>
                            <td >{{$torre->SIST}}</td>
                            <td >{{$torre->SUBSIS}}</td>

                            <td>
                                @if(Auth::user()->type == "admin")
                                <a href="{{route('torre.edit',$torre->Torre_ID)}}" title="Editar" class="btn btn-success btn-xs glyphicon glyphicon-edit" role="button"></a>
                                <a href="{{route('torre.show',$torre->Torre_ID)}}" title="Eliminar" class="btn btn-danger btn-xs glyphicon glyphicon-trash" role="button"></a>
@endif
                                <a href="{{route('pdftorre.show',$torre->Torre_ID)}}" title="Ver PDF"class="btn btn-primary btn-xs fa fa-file-pdf-o"></a>
                            </td>
                            <td>
                                <a href="{{route('planos.show',$torre->Equipo_ID)}}" title="Ver Doc"class="btn btn-primary btn-xs fa fa-file-pdf-o"></a>
                                {{--<button type="button" id="documentos" class="btn btn-primary btn-xs fa fa-edit"aria-hidden="true"> Ver Doc</button>--}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- Main component for a primary marketing message or call to action -->
    <div class="row">

    </div>
    <script>
        $("#nuevoaero").click(function (event)
        {
            document.location.href = "{{route('torre.create')}}";
        })
    </script>
    {{--<script>
        $("#editarb").click(function (event)
        {
            document.location.href = "{{route('bomba.edit')}}";
        })
    </script>--}}



@endsection

