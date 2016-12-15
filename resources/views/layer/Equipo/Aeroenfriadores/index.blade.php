
@extends('layouts.app')

@section('htmlheader_title')
    Aeroenfriador
@endsection


@section('main-content')
    {{--<link src="{{asset('/plugins/datatables/jquery.dataTables.min.css')}}"/>--}}

    <h1>
        @section('contentheader_title')
            Aeroenfriadores @endsection

    </h1>
    @include('partials.messages')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h1 class="box-title">Aeroenfriadores <small>Actualizados hasta hoy</small>   </h1>
                @if(Auth::user()->type == "admin")
                <p class="navbar-text navbar-right" style="margin-top: 1px ;">
                    <button type="button" id='nuevoaero' name='nuevoaero' class="btn btn-warning  navbar-btn" style="margin-bottom: 1px;
                margin-top: -5px; margin-right: 8px; padding: 3px 20px;"  >Nuevo</button>
                </p>
@endif



            </div>
            <!-- /.box-header -->
            <div class="panel-body">
                <table class="table table-hover" id="myTable" name="myTable">
                    <tbody>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>TAG</th>
                        <th>Aeroenfriador</th>
                        <th>Area</th>
                        <th>Sistema</th>
                        <th>Subsistema</th>
                        @if(Auth::user()->type == "admin")
                        <th>Acción</th>
                        @endif
                        <th>Documnentos</th>
                    </tr>
                    </thead>
                    </tbody>
                    @foreach($aeroenfriadores as $aeroenfriador)
                        <tr>
                            <td >{{$aeroenfriador->Aeroenfriador_ID}}</td>
                            <td >{{$aeroenfriador->Tag}}</td>
                            <td >{{$aeroenfriador->LEQUIPO}}</td>
                            <td >{{$aeroenfriador->LAREA}}</td>
                            <td >{{$aeroenfriador->SIST}}</td>
                            <td >{{$aeroenfriador->SUBSIS}}</td>

                            <td>
                               {{-- <button type="button" id="editar" name="editar" class="btn btn-primary btn-xs fa fa-edit"> Editar</button>
                                <button type="button" id="eliminar" name="eliminar" class="btn btn-danger btn-xs fa fa-trash"> Eliminar</button>
                                <button type="button" id="pdf" name="pdf" class="btn btn-success btn-xs fa fa-file-pdf-o" aria-hidden="true"> PDF</button>--}}
                                @if(Auth::user()->type == "admin")
                                    <a href="{{route('aeroenfriador.edit',$aeroenfriador->Aeroenfriador_ID)}}"title="Editar" class="btn btn-success btn-xs glyphicon glyphicon-edit" role="button"></a>
                                    <a href="{{route('aeroenfriador.show',$aeroenfriador->Aeroenfriador_ID)}}"title="Eliminar" class="btn btn-danger btn-xs glyphicon glyphicon-trash" role="button"></a>
                                @endif
                                <a href="{{route('pdfaeroenfriador.show',$aeroenfriador->Aeroenfriador_ID)}}"title="Ver PDF"class="btn btn-primary btn-xs fa fa-file-pdf-o"></a>

                            </td>
                            <td>
                                <a href="{{route('planos.show',$aeroenfriador->Equipo_ID)}}" title="Ver Doc"class="btn btn-primary btn-xs fa fa-file-pdf-o"></a>

                            </td>
                        </tr>

                       {{-- <script>
                            $("#eliminar").click(function (event)
                            {
                                document.location.href = "{{route('aeroenfriador.show',$aeroenfriador->Aeroenfriador_ID)}}";
                            })
                        </script>
                        <script>
                            $("#pdf").click(function (event)
                            {
                                document.location.href = "{{route('pdfaeroenfriador.show',$aeroenfriador->Aeroenfriador_ID)}}";
                            })
                        </script>
                        <script>
                            $("#documentos").click(function (event)
                            {
                                document.location.href = "{{route('planos.show',$aeroenfriador->Aeroenfriador_ID)}}";
                            })
                        </script>
--}}
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
   {{-- <script>
        $(function() {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('tablaaero.data') !!}',
                columns: [
                    { data: 'Aeroenfriador_ID', name: 'Aeroenfriador_ID' },
                    { data: 'LEQUIPO', name: 'LEQUIPO' },
                    { data: 'Tag', name: 'Tag' },
                    { data: 'LAREA', name: 'LAREA' },
                    { data: 'SIST', name: 'SIST' },
                    { data: 'SUBSIS', name: 'SUBSIS' },

                        @if(Auth::user()->type == "admin")

                    {data: 'action', name: 'action', orderable: false, searchable: false}
                        @endif
                    {data: 'documentacion', name: 'documentacion', orderable: false, searchable: false}

                ],
                language: {
                    lengthMenu: "Ver de _MENU_ equipos por pagina",
                    search:         "Buscar&nbsp;:",
                    zeroRecords: "No encontrado - Lo siento",
                    info: "Pagina _PAGE_ de _PAGES_",
                    infoEmpty: "No hay registros disponibles",
                    infoFiltered: "(filtrado de _MAX_ registros en total)"
                },
                paginate: {
                    first:      "Primera",
                    previous:   "Atras",
                    next:       "Siguiente",
                    last:       "Ultima"
                },

            });
        });
    </script>--}}
    <!-- Main component for a primary marketing message or call to action -->
    <div class="row">

    </div>
    @if(Auth::user()->type == "admin")
    <script>
        $("#nuevoaero").click(function (event)
        {
            document.location.href = "{{route('aeroenfriador.create')}}";
        })
    </script>
    @endif



@endsection

