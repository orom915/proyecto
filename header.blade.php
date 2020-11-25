<header class="main-header">
        <!-- Logo -->
        <a class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><Proyecto</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Proyecto</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">    
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
                  <div class="pull-right">
                    <a href="{{route('login')}}" class="btn btn-default btn-flat" style= 'width:100px; height:50px' class="posicion">Iniciar Sesion</a></div>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset("storage/imagenes/avatares/basico.png")}}" class="img-circle" alt="User Image">
    
                    <p>
                      Invitado
                      <small></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                      </div>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{route('login')}}" class="btn btn-default btn-flat">Iniciar Sesion</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{route('logout')}}" class="btn btn-default btn-flat">Cerrar Sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
