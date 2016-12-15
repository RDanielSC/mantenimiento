<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
           {{-- <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/trans.png')}}" class="img-reponsive" />
                </div>
                <div class="pull-left info">
                    <p>Busqueda Rapida</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>--}}
        @endif

        <!-- search form (Optional) -->
       {{-- <form action="#" method="get" class="sidebar-form">
            --}}{{--<div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar por TAG"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>--}}{{--
        </form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            @if(Auth::user()->type == "admin")
            <li class="treeview">
                <a href="#"><i class='fa  fa-flag'></i> <span>Ubicación Tecnica</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('area')}}">Area</a></li>
                    <li><a href="{{url('subsistema')}}">SubSistema</a></li>
                </ul>
            </li>
            @endif
            <li class="header"><a  href="{{route('equipo.index')}}">Equipos</a></li>

            <li class="header">Datos Tecnicos</li>
            <li class="treeview">
                <a href="#">
                    <i id="listaequipo" name="listaequipo" class="fa fa-briefcase"></i>
                    <span>Equipos Mecanicos</span>
                    {{--<span class="pull-right-container">--}}
              <i class="fa fa-angle-left pull-right"></i>
            {{--</span>--}}
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('aeroenfriador')}}">Aeroenfriadores</a></li>
                    <li><a href="{{url('bomba')}}">Bombas</a></li>
                    <li><a href="{{url('compresor')}}">Compresores</a></li>
                    <li><a href="{{url('torre')}}">Torres</a></li>
                    <li><a href="#">Hornos</a></li>
                    <li><a href="#">Intercambiadores</a></li>
                    <li><a href="#">Tanques</a></li>
                    <li><a href="#">Acumuladores</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i id="listaequipo" name="listaequipo" class="fa fa-bolt"></i>
                    <span>Equipos Electricos</span>

              <i class="fa fa-angle-left pull-right"></i>

                </a>
                <ul class="treeview-menu">
                    <li><a href="">Generadores</a></li>
                    <li><a href="">Motores</a></li>
                    <li><a href="">Interruptores</a></li>
                    <li><a href="">Transformadores</a></li>
                    <li><a href="">Protecciones</a></li>
                </ul>
            </li>




           {{-- <li class="treeview">
                <a ><i  class='fa fa-cogs'></i>Equipos Rotativos<i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="">---</a></li>
                    <li><a href="">---</a></li>
                    <li><a href="">---</a></li>
                    <li><a href="">---</a></li>
                    <li><a href="">---</a></li>


                </ul>
            </li>--}}
            <li class="header">Materiales</li>
            <li class="active"><a href="{{url('repuesto')}}"><i class='fa fa-wrench'></i> <span>Repuestos</span></a></li>
            <li class="header">RRHH</li>
            <li class="active"><a href="{{url('operador')}}"><i class='fa fa-users'></i> <span>Personal</span></a></li>
            <li class="header">RRDD</li>
            <li class="active"><a href="{{url('historial')}}"><i class='fa fa-history'></i> <span>Historial de Mantenimiento</span></a></li>
            <li class="active"><a href="{{url('documentacion')}}"><i class='fa fa- fa-folder'></i> <span>Documentacion</span></a></li>
            @if(Auth::user()->type == "admin")
                <li class="header">Administrador</li>
            <li class="active"><a href="{{url('usuario')}}"><i class='fa fa- fa-user'></i> <span>Usuarios</span></a></li>
                @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<script>
    $("#listaequipo").click(function (event)
    {
        document.location.href = "{{route('equipo.index')}}";
    })
</script>

