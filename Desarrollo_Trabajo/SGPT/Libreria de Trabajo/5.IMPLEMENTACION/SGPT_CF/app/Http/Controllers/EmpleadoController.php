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

    	$data['employees'] = array(
                array('code' => 'FE3432','name' => 'Juan Perez Garcia','age' => 30,'store' => 'Ripley Jeans'),
                array('code' => 'E33FFD','name' => 'Nelson Garcia Tello Led LG 40','age' => 31,'store' => 'KFC eatings'),
                array('code' => 'OPEE33','name' => 'Sheyla Quispe Torres','age' => 23,'store' => 'Pardos Chickens'),
                array('code' => 'WQ33DD','name' => 'Alejandra Germain Rios ','age' => 25,'store' => 'Store Coolbox')
                );
		
        return view('empleado.index', $data);
        
    }

    public function update()
    {
        return view('empleado.update');
    }
}
