@extends('layouts.app')
@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    {!! $dataTable->table() !!}
@endsection

@section('scripts')
    @include('layouts.partials.scripts')

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@show