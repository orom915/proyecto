@extends("theme.$theme.layout")
@extends("theme.$theme.layout")
@section('encabezado')
    @include("theme/$theme/header")
@endsection
@section('lateral')
    @include("theme/$theme/aside")
@endsection
@section('contenido')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesion</p>
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      <div class="alert-text">
        @foreach ($errors->all() as $error)
          <span>{{ $error }}</span>
        @endforeach
      </div>
    </div>
    @endif
    <form action="{{route('login_post')}}" method="post" autocomplete="off">
      @csrf
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
