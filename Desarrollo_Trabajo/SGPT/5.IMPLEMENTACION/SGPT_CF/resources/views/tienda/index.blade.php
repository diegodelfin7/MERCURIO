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
            <h3>Tienda</h3>
            <div>
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_addstore">
                    <i class="fa fa-plus" aria-hidden="true"></i> Agregar Tienda
                </button>
            </div>
            <div class="wrapper_table">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Jefe de Tienda</th>
                            <th>Horario de atencion</th>
                            <th>Acciones</th>
                        </tr>
                        @forelse ($stores as $store)
                            <tr>
                                <td>
                                    {{ $store['code'] }}
                                </td>
                                <td>
                                    {{ $store['name'] }}
                                </td>
                                <td>
                                    {{ $store['host']}}
                                </td>
                                <td>
                                    {{ $store['atention'] }}
                                </td>
                                <td>
                                    <a href="{{ url('/tienda/update') }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <button type="button" data-toggle="modal" data-target="#modal_deletestore" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            @empty
                            <p>No tiendas</p>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_addstore" tabindex="-1" role="dialog" aria-labelledy="modal_addstore">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times;</span>
                </button>
                <h4 class="modal-title"> Agregar Tienda</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="name_store">
                    </div>
                     <div class="form-group">
                        <label>Jefe de Tienda</label>
                        <input type="text" class="form-control" name="host_store">
                    </div>
                     <div class="form-group">
                        <label>Horario de atencion</label>
                        <input type="text" class="form-control" name="atention_store">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <span class="pull-right">
                    <button type="button" class="btn btn-primary">Agregar</button>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_deletestore" tabindex="-1" role="dialog" aria-labelledy="modal_deletestore">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times;</span>
                </button>
                <h4 class="modal-title"> Eliminar Tienda</h4>
            </div>
            <div class="modal-body">
                <p>Desea eliminar esta tienda ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <span class="pull-right">
                    <button type="button" class="btn btn-primary">Agregar</button>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
