
@extends('layouts.app')

@section('htmlheader_title')
    Area
@endsection


@section('main-content')
    <h1>
        @section('contentheader_title')
            Area @endsection

    </h1>
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h1 class="box-title">Areas <small>Actualizadas hasta hoy</small>   </h1>
                <button type="button" id='nuevo' name='nuevo' class="btn btn-warning navbar-btn" style="margin-bottom: 1px;
                margin-top: -5px; margin-right: 8px; padding: 3px 20px;" data-toggle="modal" data-target="#NuevaArea" >Nuevo</button>
                {{--<button type="button" id='nuevo' name='nuevo' class="btn btn btn-block btn-flat" data-toggle="modal" data-target="#NuevaArea" >Nuevo</button>--}}

                <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

                <div class="modal fade" id="NuevaArea" tabindex="-1" role="dialog" aria-labelledby="Nueva Area" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Nueva Area</h3>
                            </div>

                            <div class="modal-body">
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Area</label>
                                            <input type="text" class="form-control" placeholder="Ej. A-300">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding" >
                <table class="table table-hover " id="listarea" name="listarea" >
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Area</th>
                            <th>Accion</th>
                        </tr>
                    </tbody>
                    @foreach($areas as $area)
                        <tr>
                            <td >{{$area->Area_ID}}</td>
                            <td >{{$area->Descripcion}}</td>
                            <td>
                                <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
                                    Editar
                                </button>

                                <!-- Modal Editar -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Descripción de Area</h4>
                                            </div>
                                            <div class="modal-body">
                                                <input class="form-control input-lg" type="text" placeholder="Ej. {{$area->Descripcion}}">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#EliminarA">
                                    Eliminar
                                </button>
                                <div class="modal modal-sm modal-danger " id="EliminarA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h4>¿Esta seguro que quiere eliminar el Area {{$area->Descripcion}}?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" >NO</button>
                                                <button type="button" class="btn btn-danger">SI</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="{{ asset('public/plugins/datatables/jquery.dataTables.js') }}"></script>
    
    <script>
        $(document).ready(function(){
            $('#listarea').DataTable();
        });
    </script>

{{--    <script type="javascript">

        $("#nuevo").click(function(event)
        {
            document.location.href = "{{route('layer.Area.create')}}";
        });
    </script>--}}

@endsection
