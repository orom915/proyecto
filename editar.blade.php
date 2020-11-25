@extends("theme.$theme.layout")
@section('encabezado')
    @include("admin/admin/headeradmin")
@endsection
@section('lateral')
    @include("admin/admin/aside")
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('mensajes.form-error')
        @include('mensajes.exito')
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Editar Rol</h3>
                <div class="card-tools">
                    <a href="{{route('rol')}}" class="btn btn-outline-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('rol_actualizar', ['id' => $roles->id])}}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="card-body">
                    @include('admin.rol.form')
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection
