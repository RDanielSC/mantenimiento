
@extends('layouts.app')

@section('htmlheader_title')
    Usuarios
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>

@endpush

@section('main-content')

    <h1>
        @section('contentheader_title')
            Usuario
        @endsection

    </h1>
    @include('partials.messages')
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h1 class="box-title">
                    Usuarios
                        <small>Actualizados hasta hoy</small>
                </h1>

                @if(Auth::user()->type == "admin")
                    <button type="button" id='nuevoeq' name='nuevoeq' class="btn btn-xs btn-primary pull-right "   >
                        <i class="glyphicon glyphicon-plus"></i>  Nuevo
                    </button>
                @endif

            </div>
            <!-- /.box-header -->

                <table class="table " id="example" name="example">
                    <tbody>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Llave</th>
                            <th>Tipo de Usuario</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Actualización</th>
                            <th>Accion</th>

                        </tr>
                    </thead>
                    </tbody>
                   {{-- @foreach($documentaciones as $documentacion)
                        <tr>
                            <td >{{$documentacion->Doc_ID}}</td>
                            <td >{{$documentacion->Descripcion}}</td>
                            <td >{{$documentacion->Tag}}</td>
                            <td >{{$documentacion->Equipo}}</td>
                            <td >{{$documentacion->Area}}</td>

                            <td><a href="{{url('imag/'.$documentacion->urlDoc)}}">[Ver Doc]</a></td>

                            <td>
                                <a href="{{route('documentacion.edit',$documentacion->Doc_ID)}}">[Editar]</a>
                                <a href="{{route('documentacion.show',$documentacion->Doc_ID)}}">[Eliminar]</a>

--}}{{--
<button class="btn btn-danger btn-xm fa fa-trash" id="eliminarre"  name="eliminarre">Eliminar</button>
--}}{{--
                            </td>
                           --}}{{-- <td>
                                <a href="{{route('repuesto.show',$repuesto->Repuesto_ID)}}">[Documentacion]</a>

                            </td>--}}{{--
                        </tr>
                    @endforeach--}}
                </table>

            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
  <!-- Main component for a primary marketing message or call to action -->

    <script>
        $(function() {
            $('#example').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('tablauser.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    {data: 'tipodeusuario', name: 'tipodeusuario', orderable: false, searchable: false},
                    { data: 'created_at', name: '' },
                    { data: 'updated_at', name: '' },

                        @if(Auth::user()->type == "admin")

                    {data: 'action', name: 'action', orderable: false, searchable: false},
                        @endif

                ],
                parameters:{
                    dom:'Bftrip',
                    buttons:['csv','excel','pdf','print','print','reset','reload'],

                },
                language: {
                    lengthMenu: "Ver de _MENU_ registro por pagina",
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
        document.location.href = "{{route('usuario.create')}}";
        })
    </script>

    <div class="row">

    </div>

@endsection

