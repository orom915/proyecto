@if (session('mensaje'))
<div class="alert alert-danger alert-dismissible" auto-close="5000">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >×</button>
    <h4><i class="icon fa fa-ban"></i> Alerta</h4>
    <ul>
            <li>
                {{session('mensaje')}}
            </li>
    </ul>
  </div>
@endif
