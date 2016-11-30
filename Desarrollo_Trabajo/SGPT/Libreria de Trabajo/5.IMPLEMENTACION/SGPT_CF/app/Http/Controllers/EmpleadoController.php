<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmpleadoController extends Controller
{
    //
      public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        return view('empleado.index');
    }
}
