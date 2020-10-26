
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="card" id="">
    <div class="card-header">
        <i class="material-icons iconos">menu</i>
        Menú de opciones
    </div>

<!--<div class="card-header">
        <a href="{{route('index')}}">
            <i class="material-icons iconos">home</i>
            Portada
        </a>
    </div>-->
    <div class="card-header">
        <a href="{{route('admin')}}">
            <i class="material-icons iconos">business_center</i>
            Panel Administración
        </a>
    </div>
    <div class="card-header">
        <a href="{{route('estacionamiento.index')}}">
            <i class="material-icons iconos">directions_car</i>
            Estacionamiento
        </a>
    </div>
    @if(auth()->user()->hasRole('Administrador'))
        <div class="card-header">
            <a href="{{ route('reportes.index') }}">
                <i class="material-icons iconos">show_chart</i>
                Reportes
            </a>
        </div>
    @endif
    <div class="card-header" id="accordion">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            <i class="material-icons iconos">add</i>
            Administración
        </a>
    </div>
    <div id="collapseOne" class="panel-collapse collapse {!! Request::is('admin/plazas') || Request::is('admin/tipos') ? 'show' : '' !!}">
        <table class="table">
            <tr>
                <td>
                    <a href="{{route('plazas.index')}}">Administrar plazas</a>
                </td>
            </tr>
            @if(auth()->user()->hasRole('Administrador'))
                <tr>
                    <td>
                        <a href="{{ route('tipos.index' )}}">Tipos de plazas</a>
                    </td>
                </tr>
            @endif
        </table>
    </div>


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>