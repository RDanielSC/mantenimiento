
@extends('layouts.app')

@section('htmlheader_title')
    Historial
@endsection


@section('main-content')

    <h1>
        @section('contentheader_title')
            Historial
        @endsection

    </h1>
    @include('partials.messages')
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h1 class="box-title">
                    Historiales <small>Actualizados hasta hoy</small>
                </h1>

            <p class="navbar-text navbar-right" style="margin-top: 1px ;">
                <button type="button" id='nuevoeq' name='nuevoeq' class="btn btn-warning  navbar-btn" style="margin-bottom: 1px;
                margin-top: -5px; margin-right: 8px; padding: 3px 20px;"  >
                    Nuevo
                </button>
            </p>

            </div>
            <!-- /.box-header -->

                <table class="table " id="example" name="example">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final </th>
                            <th>Tiempo Medio de Mantenimineto</th>
                            <th>Equipo</th>
                            <th>Acción</th>
                            <th>Documentacion</th>
                        </tr>
                    </tbody>
                    @foreach($historiales as $historial)
                        <tr>
                            <td >{{$historial->Historial_ID}}</td>
                            <td >{{$historial->Descripcion     }}</td>
                            <td >{{$historial->FechaInicio}}</td>
                            <td >{{$historial->FechaFin}}</td>
                            <td >{{$historial->Total}} dias</td>


                            <td >{{$historial->Equipo}}</td>

                            <td>
                                <a href="{{route('historial.edit',$historial->Historial_ID)}}">[Editar]</a>
                                <a href="{{route('historial.show',$historial->Historial_ID)}}">[Eliminar]</a>
                                <a href="{{route('pdfhistorial.show',$historial->Historial_ID)}}">[Ver PDF]</a>

                            </td>
                            <td>
                            <a href="{{url('imag/'.$historial->imghis)}}">[Ver Doc]</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
  <!-- Main component for a primary marketing message or call to action -->
  {{--  <script>
        $(function() {
            $('#tabladehistorial').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('tablahist.data') !!}',
                columns: [
                    { data: 'Historial_ID', name: 'Historial_ID' },
                    { data: 'Descripcion', name: 'Descripcion' },
                    { data: 'FechaInicio', name: 'FechaInicio' },
                    { data: 'FechaFin', name: 'FechaFin' },
                    { data: 'Total', name: 'Total' },
                    { data: 'Equipo', name: 'Equipo' },


                        @if(Auth::user()->type == "admin")

                    {data: 'action', name: 'action', orderable: false, searchable: false},
                        @endif
                    {data: 'documentacion', name: 'documentacion', orderable: false, searchable: false}
                ],
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
    </script>--}}

    <script>
        $("#nuevoeq").click(function (event)
        {
        document.location.href = "{{route('historial.create')}}";
        })
    </script>
    <div class="row">

    </div>

@endsection

