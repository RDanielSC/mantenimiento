@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.serviceunavailable') }}
@endsection

@section('contentheader_title')
    {{ trans('adminlte_lang::message.503error') }}
@endsection

@section('$contentheader_description')
@endsection

@section('main-content')

    <div class="error-page">
        <h2 class="headline text-red">503</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-red"></i> Oops! Usted no tiene permiso para estar en esta pagina</h3>
            <br>

            <p>
                Si usted necesita estar en esta pagina contactese con un administrador
                {{ trans('adminlte_lang::message.mainwhile') }} <a href='{{ url('/home') }}'>volver al inicio</a>
            </p>

        </div>
    </div><!-- /.error-page -->
@endsection