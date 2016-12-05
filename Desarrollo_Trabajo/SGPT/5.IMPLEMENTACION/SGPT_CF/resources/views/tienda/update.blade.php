@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-list">      
                <li>
                    <a href="{{ url('/almacen') }}">
                        <i class="fa fa-home fa-lg" aria-hidden="true"></i> 
                        Almacén
                    </a>
                </li>
                <li>
                    <a href="{{ url('/empleado') }}">
                        <i class="fa fa-users fa-lg" aria-hidden="true"></i>
                         Empleado 
                    </a>
                </li>
                <li>
                    <a href="{{ url('/tienda') }}">
                        <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> Tienda
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <h3>Update Tienda</h3>
          
            <div class="wrapper_table">
                <form>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="name_store" value="Juan Roberto Silva">
                    </div>
                     <div class="form-group">
                        <label>Jefe de Tienda</label>
                        <input type="text" class="form-control" name="host_store" value="Tottus Open Plaza Atongoco">
                    </div>
                     <div class="form-group">
                        <label>Horario de atencion</label>
                        <input type="text" class="form-control" name="atention_store" value="9:00am - 22:00pm">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
