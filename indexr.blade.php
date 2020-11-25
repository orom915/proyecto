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
        <h3 class="box-title"><b>Rol</b></h3>
    </div>
        <div class="card-tools">
            <a href="{{route('rol_crear')}}" class="btn btn-outline-secondary btn-sm">
                 <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
            </a>
        </div>
            <div class="box-body">
                <table class="table table-bordered" id="tabla-data">
                    <thead>
                        <tr>
                            <th class="width20">ID</th>
                            <th>Nombre</th>
                            <th class="width80"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->nombre}}</td>
                            <td style="width: 20px">
                                <a href="{{route('rol_editar', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <td style="width: 20px">
                                <form action="{{route('rol_eliminar', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-times-circle text-danger"></i>
                                    </button>
                                </form>
                                </td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>
@endsection
