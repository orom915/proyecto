@extends("theme.$theme.layout")
@section('encabezado')
    @include("admin/admin/headeradmin")
@endsection
@section('contenido')
    @include('mensajes.form-error')
    @include('mensajes.exito')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Editar Usuario {{$datos->email}}</h3>
                    <div class="card-tools">
                        <a href="{{route('inicio_admin')}}" class="btn btn-outline-info btn-sm">
                            <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                        </a>
                    </div>
                </div>
                <form action="{{route('usuario_actualizar', ['id' => $datos->id])}}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <div class="card-body">
                        <div class="box-body">
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                              <label for="password">Contraseña</label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                              <label for="rol_id">Rol</label>
                              <select name="rol_id[]" id="rol_id" class="form-control" multiple required>
                                @foreach($rango as $id => $nombre)
                                    <option
                                    value="{{$id}}"
                                    {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '')  : (isset($datos) ? ($datos->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}
                                    >
                                    {{$nombre}}
                                    </option>
                                @endforeach
                            </select>
                            </div>
                          </div>

                    </div>
                    <div class="card-footer">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
