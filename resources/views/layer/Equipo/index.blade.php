
@extends('layouts.app')

@section('htmlheader_title')
    Equipos
@endsection


@section('main-content')
    {{--<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">--}}


    <h1>
        @section('contentheader_title')
            Equipo
        @endsection

    </h1>
    @include('partials.messages')
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h1 class="box-title">
                    Equipos <small>Actualizados hasta hoy</small>
                </h1>


                @if(Auth::user()->type == "admin")
                    <button type="button" id='nuevoeq' name='nuevoeq' class="btn btn-xs btn-primary pull-right "   >
                        <i class="glyphicon glyphicon-plus"></i>  Nuevo
                    </button>
                    @endif


            </div>
            <!-- /.box-header -->

                <table class="table " id="tablaequipo" class="table table-bordered" cellspacing="0" width="100%">
                    <tbody>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Equipo</th>
                            <th>TAG</th>

                            <th>Area</th>
                            <th>Sistema</th>
                            <th>Subsistema</th>
                            @if(Auth::user()->type == "admin")
                                <th>Acción</th>
                            @endif
                        </tr>
                    </thead>
                    </tbody>
                   {{-- @foreach($equipos as $equipo)
                        <tr>
                            <td >{{$equipo->Equipo_ID}}</td>
                            <td >{{$equipo->Tag}}</td>
                            <td >{{$equipo->LEquipo}}</td>

                            <td >{{$equipo->Area}}</td>
                            <td >{{$equipo->Sistema}}</td>
                            <td >{{$equipo->SubSistema}}</td>

                            <td>
                                --}}{{--<button type="button" id="editar" class="btn btn-primary btn-xs fa fa-edit"aria-hidden="true"> Editar</button>
                                <button type="button" id="eliminar" class="btn btn-danger btn-xs fa fa-trash"aria-hidden="true"> Eliminar</button>
                                <button type="button" id="pdf" class="btn btn-success fa fa-file-pdf-o" aria-hidden="true"> PDF</button>--}}{{--
                                <a href="{{route('equipo.edit',$equipo->Equipo_ID)}}">[Editar]</a>
                                <a href="{{route('equipo.show',$equipo->Equipo_ID)}}">[Eliminar]</a>
                               --}}{{-- <a href="{{route('equipo.show',$equipo->Equipo_ID)}}">[Ver PDF]</a>
                                <a href="{{route('equipo.show',$equipo->Equipo_ID)}}">[Imprimir]</a>--}}{{--

                            </td>
                        </tr>
                    @endforeach--}}
                </table>
{{--<div class="text-center">
    {!! $equipos->links() !!}
</div>--}}
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
  <!-- Main component for a primary marketing message or call to action -->

    <script>
        $(function() {
            $('#tablaequipo').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('tablaequi.data') !!}',
                columns: [
                    { data: 'Equipo_ID', name: 'Equipo_ID' },
                    { data: 'desEquipo', name: 'desEquipo' },
                    { data: 'Tag', name: 'Tag' },
                    { data: 'Area', name: 'Area' },
                    { data: 'Sistema', name: 'Sistema' },
                    { data: 'SubSistema', name: 'SubSistema' },

                        @if(Auth::user()->type == "admin")

                    {data: 'action', name: 'action', orderable: false, searchable: false}
                    @endif
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
    </script>

    <script>
        $("#nuevoeq").click(function (event)
        {
        document.location.href = "{{route('equipo.create')}}";
        })
    </script>

    <div class="row">

    </div>

@endsection

