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
            <h3>Almacen</h3>
            <div>
            	<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_addproduct">
            		<i class="fa fa-plus" aria-hidden="true"></i> Agregar Producto
            	</button>
            </div>
            <div class="wrapper_table">
            	<div class="table-responsive">
            		<table class="table">
            			<tr>
            				<th>Código</th>
            				<th>Nombre</th>
            				<th>Descripción</th>
            				<th>Stock</th>
            				<th>Acciones</th>
            			</tr>
            			@forelse ($products as $product)
            				<tr>
            					<td>
            						{{ $product['code'] }}
            					</td>
	            				<td>
	            					{{ $product['name'] }}
	            				</td>
	            				<td>
	            					{{ $product['description'] }}
	            				</td>
	            				<td>
	            					{{ $product['stock'] }}
	            				</td>
	            				<td>
	            					<a  href="{{ url('/almacen/update') }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
	            					<button type="button" data-toggle="modal"  data-target="#modal_deleteproduct" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
	            				</td>
            				</tr>
	            			@empty
	            			<p>No users</p>
            			@endforelse
            		</table>
            	</div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_addproduct" tabindex="-1" role="dialog" aria-labelledy="modal_addproduct">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times;</span>
                </button>
                <h4 class="modal-title"> Agregar Producto</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="name_product">
                    </div>
                     <div class="form-group">
                        <label>Descrpcion</label>
                        <textarea class="form-control" name="description_product"></textarea>
                    </div>
                     <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" name="stock_product">
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
<div class="modal fade" id="modal_deleteproduct" tabindex="-1" role="dialog" aria-labelledy="modal_deleteproduct">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times;</span>
                </button>
                <h4 class="modal-title"> Eliminar Producto</h4>
            </div>
            <div class="modal-body">
                <p>Desea eliminar este producto ?</p>
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
