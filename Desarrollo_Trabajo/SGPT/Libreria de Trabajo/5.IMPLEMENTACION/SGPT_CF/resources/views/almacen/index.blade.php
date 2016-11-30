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
            	<button class="btn btn-primary btn-xs">
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
	            					<button class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
	            					<button class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
@endsection
