@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	{{--<h1>
        @section('contentheader_title')
            Equipo
        @endsection

    </h1>--}}
	@include('partials.messages')
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header ">
				<h1 class="box-title">
					Inicio
				</h1>

			</div>
			<!-- /.box-header -->

			<table class="table " id="tablaequipo" style="text-align:center" >
				<tbody>
				<thead>
				<tr>
					<th>ID</th>
					<th>Equipo</th>
					<th>TAG</th>

					<th>Area</th>
					{{--<th>Datos <br> tecnicos</th>--}}
					<th>Documnentos</th>
					<th>Repuestos</th>
					<th>Personal
						<br>  Calificado</th>
					<th>Historial</th>

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
				ajax: '{!! route('tablaini.data') !!}',
				columns: [
					{ data: 'Equipo_ID', name: 'Equipo_ID' },
					{ data: 'desEquipo', name: 'desEquipo' },
					{ data: 'Tag', name: 'Tag' },
					{ data: 'Area', name: 'Area' },
//					{data: 'datostecnicos', name: 'datostecnicos', orderable: false, searchable: false},
					{data: 'doc', name: 'doc', orderable: false, searchable: false},
					{data: 'rep', name: 'rep', orderable: false, searchable: false},
					{data: 'per', name: 'per', orderable: false, searchable: false},
					{data: 'historia', name: 'historia', orderable: false, searchable: false},




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
	{{--	<div class="container spark-screen">

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">

                        <div class="panel-heading"><h1>Inicio</h1></div>

                        <div class="panel-body">



                            --}}{{----}}{{--
                            <section class="content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- AREA CHART -->
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Equipos registrados</h3>

                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="chart">
                                                    <canvas id="areaChart" style="height:250px"></canvas>
                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->

                                        <!-- DONUT CHART -->
                                        <div class="box box-danger">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Documentos Resgistrados</h3>

                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <canvas id="pieChart" style="height: 249px; width: 498px;" height="498" width="996"></canvas>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->

                                    </div>
                                    <!-- /.col (LEFT) -->
                                    <div class="col-md-6">
                                        <!-- LINE CHART -->
                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Historiales Registrados</h3>

                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="chart">
                                                    <canvas id="lineChart" style="height:250px"></canvas>
                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->

                                        <!-- BAR CHART -->
                                        <div class="box box-success">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Bar Chart</h3>

                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="chart">
                                                    <canvas id="barChart" style="height:230px"></canvas>
                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->

                                    </div>
                                    <!-- /.col (RIGHT) -->
                                </div>
                                <!-- /.row -->

                            </section>


                            --}}{{----}}{{--


                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
@endsection
