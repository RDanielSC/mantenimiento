
@extends('layouts.app')

@section('htmlheader_title')
    Repuestos
@endsection


@section('main-content')
    {{--<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">--}}

    <h1>
        @section('contentheader_title')
            Repuestos
        @endsection

    </h1>
    @include('partials.messages')
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header ">
                <h1 class="box-title">
                    Repuestos <small>Actualizados hasta hoy</small>
                </h1>

            <p class="navbar-text navbar-right" >

            </p>
               {{-- {!!Form::open(['route'=>'repuesto.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search','files'=>true]) !!}
<div class="form-group">
    {!! Form::text('Descripcion',null,['class'=>'form-control','placeholder'=>'Nombre del Repuesto']) !!}
</div>--}}@if(Auth::user()->type == "admin")

                <button type="button" id='nuevoeq' name='nuevoeq' class="btn btn-xs btn-primary pull-right "   >
                    <i class="glyphicon glyphicon-plus"></i>  Nuevo
                </button>
               @endif
            </div>
            <!-- /.box-header -->

                <table class="table " id="example" name="example">
                    <tbody>
                        <thead >

                            <th>ID</th>
                            <th>Repuesto</th>
                            <th>N° de Parte</th>
                            <th>Descripcion</th>
                            <th>TAG del Equipo</th>
                            <th>Area</th>
                            <th>Imagen</th>
                            @if(Auth::user()->type == "admin")
                            <th>Acción</th>
@endif
                        </tr>
                    </thead>
                </tbody>   {{--
                    @foreach($repuestos as $repuesto)
                        <tr>
                            <td >{{$repuesto->Repuesto_ID}}</td>
                            <td >{{$repuesto->Descripcion}}</td>
                            <td >{{$repuesto->NoParte}}</td>
                            <td >{{$repuesto->Dimension}}</td>
                            <td >{{$repuesto->Equipo}}</td>
                            <td >{{$repuesto->Area}}</td>
                            <td ><img src="imagenes/{{$repuesto->imgrepuesto}}" alt="" style="width:100px" ></td>

                            <td>
                                --}}{{--<button type="button" id="editar" class="btn btn-primary btn-xs fa fa-edit"> Editar</button>
                                <button type="button" id="eliminare" class="btn btn-danger btn-xs fa fa-trash"> Eliminar</button>--}}{{--
                                <a href="{{route('repuesto.edit',$repuesto->Repuesto_ID)}}">[Editar]</a>
                                <a href="{{route('repuesto.show',$repuesto->Repuesto_ID)}}">[Eliminar]</a>
                            --}}{{--    <a href="{{route('repuesto.show',$repuesto->Repuesto_ID)}}">[Ver PDF]</a>--}}{{--
--}}{{--<button class="btn btn-danger btn-xm fa fa-trash" id="eliminarre"  name="eliminarre">Eliminar</button>--}}{{--
                            </td>

                        </tr>

                    @endforeach--}}
                </table>

            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
  <!-- Main component for a primary marketing message or call to action -->
{{--<sript src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" ></sript>--}}
    <script>
        $(function() {
            $('#example').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('tablarepu.data') !!}',
                columns: [
                    { data: 'Repuesto_ID', name: 'Repuesto_ID' },
                    { data: 'Descripcion', name: 'Descripcion' },
                    { data: 'NoParte', name: 'NoParte' },
                    { data: 'Dimension', name: 'Dimension' },
                    { data: 'Tag', name: 'Tag' },
                    { data: 'Area', name: 'Area' },
                    { data: 'imagen', name: 'imagen', orderable: false, searchable: false },
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
        document.location.href = "{{route('repuesto.create')}}";
        })
    </script>
   {{-- <script>
        $("#eliminare").click(function (event)
        {
            document.location.href = "{{route('repuesto.show',$repuesto->Repuesto_ID)}}";
        })
    </script>
    <script>
        $("#editar").click(function (event)
        {
            document.location.href = "{{route('repuesto.edit',$repuesto->Repuesto_ID)}}";
        })
    </script>--}}
    <div class="row">

    </div>

@endsection

