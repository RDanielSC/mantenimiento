@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <section class="content">
        <div class="row">
    <div class="col-xs-12">
        <div class="box">
    <div class="box-header">
        <h3 class="box-title">Usuarios</h3>
    </div>
    <div class="box-body">
    <table class="table table-bordered table-hover" id="users-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>action</th>
        </tr>
        </thead>
    </table>
    </div>
        </div>
    </div>
        </div>
    </section>

    {{--<script type="text/javascript">
        $(function() {
            $('#example').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! url('api/equipo') !!}',
                columns: [
                    { data: 'Equipo_ID', name: 'Equipo_ID' },
                    { data: 'Tag', name: 'Tag' },
                    { data: 'LEquipo', name: 'LEquipo' },
                    { data: 'Area', name: 'Area' },
                    { data: 'Sistema', name: 'Sistema'},
                    { data: 'SubSistema', name: 'SubSistema'}
                ]
            });
        });
    </script>--}}
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' },
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endsection

