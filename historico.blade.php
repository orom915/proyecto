<div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Histórico de datos</b></h3>
    </div>
    <div class="box-body">
      <table class="table table-bordered">
        <tbody>
          <tr>
          <th>Archivo</th>
          <th style="width: 120px">Ultimo histórico</th>
          <th style="width: 20px">Descargar</th>
          <th style="width: 20px; text-align: center">Elegir archivo</th>
          <th style="width: 20px">Actualizar</th></tr>
          <tr><td>
          @foreach ($archivo as $archivos)
            {{$archivos->Archivo}}@endforeach</td><td align="center">
          @foreach ($archivo as $archivos)
            {{$archivos->updated_at}}@endforeach
          </td><td align="center">@foreach ($archivo as $archivos)
          <a href="{{route('descargar_archivo')}}" class="glyphicon glyphicon-download-alt"></a>@endforeach
          </td><td align="center">
          <form action="{{route('historico')}}" id="historico_cambio"  method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-group" style="text-align: center">
                <input type="file" class="" name="historico" id="historico" placeholder="Actualizar Archivo"></td>
                  <label for="historico" class="fas fa-cloud-upload-alt"></label></div><td align="center">
                <button type="submit" class="fa fa-save" style="width: 30px"></button></td>
            </div>
          </td></form>
        </tr>
        </tbody>
      </table>
    </div>
</div>
