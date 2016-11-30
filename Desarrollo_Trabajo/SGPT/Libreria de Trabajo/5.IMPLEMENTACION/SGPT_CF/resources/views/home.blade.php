@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!--
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
        -->
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
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
