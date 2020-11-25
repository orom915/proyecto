@extends("theme.$theme.layout")
@section('encabezado')
    @include("admin/admin/headeradmin")
@endsection
@section('lateral')
    @include("admin/admin/aside")
@endsection
@section('contenido')
    @include('mensajes.exito')
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Usuarios</b></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody><tr>
              <th style="width: 10px">Id</th>
              <th>Email</th>
              <th style="width: 20px"></th>
              <th style="width: 20px"></th>
            </tr>
            @foreach ($usuarios as $usuario)
            <tr>
              <td>
                {{$usuario->id}}
              </td>
              <td>
                {{$usuario->email}}
              </td>
              <td>
                <a href="{{route('usuario_editar', ['id' => $usuario->id])}}" class="btn-accion-tabla tooltipsC" title="Editar usuario">
                    <i class="fa fa-edit"></i>
                </a></td><td>
                <form action="{{route('usuario_eliminar', ['id' => $usuario->id])}}" class="d-inline form-eliminar" method="POST">
                    @csrf @method("delete")
                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar usuario">
                        <i class="fa fa-times-circle text-danger"></i>
                    </button></td>
                </form>
            </td>
            </tr>
        @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endsection
