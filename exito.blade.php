@if (session('mensaje'))
<div class="alert alert-success alert-dismissible" auto-close="5000">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Correcto</h>
    <ul>
            <li>
                {{session('mensaje')}}
            </li>
    </ul>
  </div>
@endif
