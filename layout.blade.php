<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ciovid-Optimizacion de test</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">


  @yield("styles")

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<div align="center"><img src="{{asset("storage/fondo/ciov6.jpg")}}" width="650" height="90"></div>

<body class="hold-transition skin-red-light layout-boxed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!--Inicio Header-->
        <section class="main-header">
            @yield("encabezado")
        </section>
        <!--Fin Header-->
        <!--Inicio Aside(menu lateral)-->
            @yield("lateral")
        <!--Fin Aside-->
        <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content">
                    @yield("contenido")
                </section>
        </div>
        <!--Inicio Footer-->
        <!--Fin Footer-->
    </div>
<script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- Tablas -->
<script src="{{asset("assets/$theme/bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
<!-- Chart.js -->
<script src="{{asset("assets/$theme/bower_components/chart.js/Chart.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
<script src="{{asset("assets/js/tabla.js")}}"></script>
<!-- AdminLTE for demo purposes -->

@yield("scripts")
</body>
</html>
