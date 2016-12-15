
@extends('layouts.app')

@section('htmlheader_title')
    Operador
@endsection


@section('main-content')


    <h1>
        @section('contentheader_title')
            Operador
        @endsection

    </h1>
    @include('partials.messages')
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h1 class="box-title">
                    Operadores <small>Actualizados hasta hoy</small>
                </h1>
                @if(Auth::user()->type == "admin")
                    <p class="navbar-text navbar-right" style="margin-top: 1px ;">
                        <button type="button" id='nuevoeq' name='nuevoeq' class="btn btn-xs btn-primary pull-right" style="margin-bottom: 1px;
                        margin-top: -5px; margin-right: 8px; padding: 3px 20px;"  >
                            <i class="glyphicon glyphicon-plus"></i>  Nuevo
                        </button>
                    </p>
                @endif
            </div>
            <!-- /.box-header -->

                <table class="table " id="tablaoperador" name="tablaoperador">
                    <tbody>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Llave</th>
                            <th>Cargo</th>
                            <th>Gerencia</th>
                            <th>Area</th>
                            @if(Auth::user()->type == "admin")
                                <th>Accion</th>
                            @endif


                        </tr>
                    </thead>
                    </tbody>
                    {{--@foreach($operadores as $operador)
                        <tr>
                            <td >{{$operador->Operador_ID}}</td>
                            <td >{{$operador->Nombre}}</td>
                            <td >{{$operador->Llave}}</td>
                            <td >{{$operador->Cargo}}</td>
                            <td >{{$operador->Gerencia}}</td>
                            <td >{{$operador->Area}}</td>

                            <td>
                                <a href="{{route('operador.edit',$operador->Operador_ID)}}">[Editar]</a>
                                <a href="{{route('operador.show',$operador->Operador_ID)}}">[Eliminar]</a>
                                <a href="{{route('operador.show',$operador->Operador_ID)}}">[Ver PDF]</a>
                                <a href="{{route('operador.show',$operador->Operador_ID)}}">[Imprimir]</a>

                            </td>
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
            $('#tablaoperador').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('tablaope.data') !!}',
                columns: [
                    { data: 'Operador_ID', name: 'Operador_ID' },
                    { data: 'Nombre', name: 'Nombre' },
                    { data: 'Llave', name: 'Llave' },
                    { data: 'Cargo', name: 'Cargo' },
                    { data: 'Gerencia', name: 'Gerencia' },
                    { data: 'Area', name: 'Area' },

                        @if(Auth::user()->type == "admin")

                    {data: 'action', name: 'action', orderable: false, searchable: false}
                    @endif
                ],
                language: {
                    lengthMenu: "Ver de _MENU_ registros por pagina",
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
        document.location.href = "{{route('operador.create')}}";
        })
    </script>
    <div class="row">

    </div>

@endsection

