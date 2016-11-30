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
            <h3>Empleado</h3>
            <div>
                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_addemployee">
                    <i class="fa fa-plus" aria-hidden="true"></i> Agregar Empleado
                </button>
            </div>
            <div class="wrapper_table">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Código</th>
                            <th>Nombres</th>
                            <th>Edad</th>
                            <th>Tienda</th>
                            <th>Acciones</th>
                        </tr>
                        @forelse ($employees as $employee)
                            <tr>
                                <td>
                                    {{ $employee['code'] }}
                                </td>
                                <td>
                                    {{ $employee['name'] }}
                                </td>
                                <td>
                                    {{ $employee['age'] }}
                                </td>
                                <td>
                                    {{ $employee['store'] }}
                                </td>
                                <td>
                                    <a  href="{{  url('/empleado/update') }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_deleteemployee"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            @empty
                            <p>No empleados</p>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_addemployee" tabindex="-1" role="dialog" aria-labelledy="modal_addemployee">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times;</span>
                </button>
                <h4 class="modal-title"> Agregar Empleado</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="name_store">
                    </div>
                     <div class="form-group">
                        <label>Edad</label>
                        <input type="text" class="form-control" name="host_store">
                    </div>
                     <div class="form-group">
                        <label>Tienda</label>
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
<div class="modal fade" id="modal_deleteemployee" tabindex="-1" role="dialog" aria-labelledy="modal_deleteemployee">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times;</span>
                </button>
                <h4 class="modal-title"> Eliminar Empleado</h4>
            </div>
            <div class="modal-body">
                <p>Desea eliminar este empleado ?</p>
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
