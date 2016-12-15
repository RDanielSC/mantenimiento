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
                                    <th>Descripcion</th>
                                    <th>Tag</th>
                                    <th>Area</th>
                                    <th>Documentacion</th>
                                </tr>
                            </thead>
                            </tbody>
                                @foreach($documentaciones as $documentacion)
                                    <tr>

                                        <td>{{$documentacion->Doc_ID}}</td>
                                        <td>{{$documentacion->Descripcion}}</td>
                                        <td>{{$documentacion->Tag}}</td>
                                        <td>{{$documentacion->Area}}</td>
                                        <td>
                                            <a href="javascript:window.open('{{url('imag/'.$documentacion->urlDoc)}}','','width=600,height=900,left=100,top=50,toolbar=no,menubar=no,directories=no,location=no');void 0"class="btn btn-xs btn-primary" title="Ver Documentacion"><i class="glyphicon glyphicon-eye-open"></i> <small>VER</small> </a>
                                        </td>
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