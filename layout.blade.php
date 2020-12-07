<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ciovid-Optimizacion de test</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">
  @yield("styles")
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<div align="center"><img src="{{asset("storage/fondo/ciov6.jpg")}}" width="650" height="90"></div>
<body class="hold-transition skin-red-light layout-boxed sidebar-mini">
    <div class="wrapper">
        <section class="main-header">
            @yield("encabezado")
        </section>
            @yield("lateral")
        <div class="content-wrapper">
                <section class="content">
                    @yield("contenido")
                </section>
        </div>
    </div>
<script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
<script src="{{asset("assets/$theme/bower_components/chart.js/Chart.js")}}"></script>
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
<script src="{{asset("assets/js/tabla.js")}}"></script>
@yield("scripts")
</body>
</html>
