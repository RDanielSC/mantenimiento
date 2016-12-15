
@extends('layouts.app')

@section('htmlheader_title')
    Compresores
@endsection


@section('main-content')
    {{--<link src="{{asset('/plugins/datatables/jquery.dataTables.min.css')}}"/>--}}
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <h1>
        @section('contentheader_title')
            Compresores @endsection

    </h1>
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h1 class="box-title">Compresores <small>Actualizados hasta hoy</small>   </h1>
                @if(Auth::user()->type == "admin")
                <p class="navbar-text navbar-right" style="margin-top: 1px ;">
                    <button type="button" id='nuevocompr' name='nuevocompr' class="btn btn-warning  navbar-btn" style="margin-bottom: 1px;
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
                        <th>Compresor</th>
                        <th>Area</th>
                        <th>Sistema</th>
                        <th>Subsistema</th>
                        @if(Auth::user()->type == "admin")
                        <th>Acción</th>
                        @endif
                        <th>Documnentos</th>
                    </tr>
                    </tbody>
                    @foreach($compresores as $compresor)
                        <tr>
                            <td >{{$compresor->Compresor_ID}}</td>
                            <td >{{$compresor->Tag}}</td>
                            <td >{{$compresor->LEQUIPO}}</td>
                            <td >{{$compresor->LAREA}}</td>
                            <td >{{$compresor->SIST}}</td>
                            <td >{{$compresor->SUBSIS}}</td>


                            <td>
                                @if(Auth::user()->type == "admin")
                                <a href="{{route('compresor.edit',$compresor->Compresor_ID)}}" title="Editar" class="btn btn-success btn-xs glyphicon glyphicon-edit" role="button"></a>
                                <a href="{{route('compresor.show',$compresor->Compresor_ID)}}" title="Eliminar" class="btn btn-danger btn-xs glyphicon glyphicon-trash" role="button"></a>
                                @endif
                                <a href="{{route('pdfcompresor.show',$compresor->Compresor_ID)}}" title="Ver PDF"class="btn btn-primary btn-xs fa fa-file-pdf-o"></a>
                            </td>
                            <td>
                                    <a href="{{route('planos.show',$compresor->Equipo_ID)}}"title="Ver Doc"class="btn btn-primary btn-xs fa fa-file-pdf-o"></a>
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
        $("#nuevocompr").click(function (event)
        {
            document.location.href = "{{route('compresor.create')}}";
        })
    </script>



@endsection

