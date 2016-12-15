@extends('layouts.app')

@section('htmlheader_title')
    Bomba
@endsection


@section('main-content')
    {{--<link src="{{asset('/plugins/datatables/jquery.dataTables.min.css')}}"/>--}}
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <h1>
        @section('contentheader_title')
            Bombas @endsection

    </h1>
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h1 class="box-title">Bombas <small>Actualizados hasta hoy</small>   </h1>
                @if(Auth::user()->type == "admin")
                <p class="navbar-text navbar-right" style="margin-top: 1px ;">
                    <button type="button" id='nuevoaero' name='nuevoaero' class="btn btn-warning  navbar-btn" style="margin-bottom: 1px;
                margin-top: -5px; margin-right: 8px; padding: 3px 20px;"  >Nuevo</button>
                </p>@endif



            </div>
            <!-- /.box-header -->
            <div class="panel-body">
                <table class="table table-hover" id="myTable">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>TAG</th>
                        <th>Bomba</th>
                        <th>Area</th>
                        <th>Sistema</th>
                        <th>Subsistema</th>
                        @if(Auth::user()->type == "admin")
                        <th>Acción</th>
                        @else
                            <th>Datos <br> Tecnicos</th>
                        @endif
                        <th>Documnentos</th>
                        <th>Repuestos</th>
                        <th>Personal
                            <br> Calificado</th>
                    </tr>
                    </tbody>
                    @foreach($bombas as $bomba)
                        <tr>
                            <td  style="vertical-align:middle;text-align: center">{{$bomba->Bomba_ID}}</td>
                            <td >{{$bomba->Tag}}</td>
                            <td >{{$bomba->LEQUIPO}}</td>
                            <td >{{$bomba->LAREA}}</td>
                            <td >{{$bomba->SIST}}</td>
                            <td >{{$bomba->SUBSIS}}</td>

                            <td style="vertical-align:middle;text-align: center">
                                @if(Auth::user()->type == "admin")
                                    <a href="{{route('bomba.edit',$bomba->Bomba_ID)}}" title="Editar" class="btn btn-success btn-xs glyphicon glyphicon-edit" role="button"></a>
                                    <a href="{{route('bomba.show',$bomba->Bomba_ID)}}" title="Eliminar" class="btn btn-danger btn-xs glyphicon glyphicon-trash" role="button"></a>
                                @endif
                                <a href="{{route('pdfbomba.show',$bomba->Equipo_ID)}}" title="Ver PDF"class="btn btn-primary btn-xs fa fa-file-pdf-o"></a>
                            </td>
                            <td style="vertical-align:middle;text-align: center">

                                {{--@if (($bomba->Equipo_ID))--}}
                                    <a href="{{route('planos.show',$bomba->Equipo_ID)}}"title="Ver Documento"class="btn btn-primary btn-xs fa fa-file-pdf-o"></a>
                                {{--@else--}}
{{--<h>sin documentacion</h>--}}
                                    {{--@endif--}}
                                    {{--<button type="button" id="documentos" class="btn btn-primary btn-xs fa fa-edit"aria-hidden="true"> Ver Doc</button>--}}
                            </td>
                            <td style="vertical-align:middle;text-align: center"> <a href="{{route('planos.show',$bomba->Equipo_ID)}}"title="Ver Repuestos" class=" btn btn-primary btn-xs fa fa-wrench"></a></td>
                            <td style="vertical-align:middle;text-align: center"><a href="{{route('planos.show',$bomba->Equipo_ID)}}"title="Ver personal calificado" class="btn btn-primary btn-xs fa fa-users"></a></td>
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
            document.location.href = "{{route('bomba.create')}}";
        })
    </script>
    {{--<script>
        $("#editarb").click(function (event)
        {
            document.location.href = "{{route('bomba.edit')}}";
        })
    </script>--}}



@endsection

