<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{Storage::url("imagenes/avatares/$fotos")}}" class="img-circle" alt="Imagen de perfil">
            </div>
            <div class="pull-left info">
              <p>{{session()->get('email')}}</p>
            </div>
          </div>
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header" align="center"><b>OPCIONES</b></li>
            <li>
              <a href="{{route('inicio_admin')}}">
                <i class="fa fa-fw fa-file"></i> <span>Histórico</span>
              </a>
            </li>
            <li>
              <a href="{{route('ver_usuarios')}}">
                <i class="glyphicon glyphicon-user"></i> <span>Usuarios</span>
              </a>
            </li>
            <li>
              <a href="{{route('rol')}}">
                <i class="fa fa-fw fa-tags"></i> <span>Rol</span>
              </a>
            </li>
            <li>
              <a href="{{route('alta')}}">
                <i class="fa fa-fw fa-user-plus"></i> <span>Dar de alta usuarios</span>
              </a>
            </li>
            <li>
              <a href="{{route('logout')}}">
                <i class="glyphicon glyphicon-off"></i> <span>Cerrar Sesión</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
