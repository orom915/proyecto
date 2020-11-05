@extends("theme.$theme.layout")
@section('encabezado')
    @include("admin/admin/headeradmin")
@endsection
@section('contenido')
@include('mensajes.form-error')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Alta de Usuario</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{route('usuario_guardar')}}" id="FormularioAltaUsuario"  method="POST">
        @csrf
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
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Dar de alta</button>
      </div>
    </form>
  </div>
  @endsection
