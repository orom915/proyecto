<link rel="stylesheet" href="{{asset("assets/css/propio.css")}}">
<div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Test a distribuir</b></h3>
    </div>
<div class="box-body">
<table id="example2" class="table table-bordered table-hover" style="width:100%">
    <thead>
        <tr>
            <td><b>Municipio</b></td>
            <th>Dia 1</th>
            <th>Dia 2</th>
            <th>Dia 3</th>
            <th>Dia 4</th>
            <th>Dia 5</th>
            <th>Dia 6</th>
            <th>Dia 7</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datos as $test)
        <tr>
            <td><b>{{$test->municipio}}</b></td>
            <th>{{$test->dia1}}</th>
            <th>{{$test->dia2}}</th>
            <th>{{$test->dia3}}</th>
            <th>{{$test->dia4}}</th>
            <th>{{$test->dia5}}</th>
            <th>{{$test->dia6}}</th>
            <th>{{$test->dia7}}</th>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td><b>Municipio</b></td>
            <th>Dia 1</th>
            <th>Dia 2</th>
            <th>Dia 3</th>
            <th>Dia 4</th>
            <th>Dia 5</th>
            <th>Dia 6</th>
            <th>Dia 7</th>
        </tr>
    </tfoot>
</table>
</div>
</div>
