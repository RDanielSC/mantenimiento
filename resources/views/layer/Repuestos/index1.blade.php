<!DOCTYPE html>
<html>
<head>   @foreach($equipo as $equip)
        <title>Documentacion {{$equip->Tag}}</title>

    @section('htmlheader')
        @include('layouts.partials.htmlheader')
    @show
</head>
<body>

<br> <div class="col-xs-12">
    <div class="box">
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3>Lista de Documentos para: <br> <small>{{$equip->Tag}} | {{$equip->Descripcion}}</small> </h3>
                @endforeach
            </div>

            <!-- /.box-header -->
            <div class="panel-body">

                <table class="table table-striped table-inverse" id="example" name="example">
                    <tbody>
                    <thead>
                    <tr>

                            <th>ID</th>
                            <th>Repuesto</th>
                            <th>N° de Parte</th>
                            <th>Descripcion</th>
                        <th>Equipo</th>     <th>TAG del Equipo</th>



                    </tr>
                    </thead>
                </tbody>
                    @foreach($repuestos as $repuesto)
                        <tr>
                            <td >{{$repuesto->Repuesto_ID}}</td>
                            <td >{{$repuesto->Descripcion}}</td>
                            <td >{{$repuesto->NoParte}}</td>
                            <td >{{$repuesto->Dimension}}</td>
                            <td >{{$repuesto->Equipo}}</td>
                            <td >{{$repuesto->Tag}}</td>

                        </tr>
                    @endforeach
                </table>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
</body>