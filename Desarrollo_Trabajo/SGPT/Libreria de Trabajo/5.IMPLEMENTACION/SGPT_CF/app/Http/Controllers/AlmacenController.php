<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlmacenController extends Controller
{
    //
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        $data['products'] = array(
                array('code' => 'FE3432','name' => 'Televisor Led LG 32','description' => 'Televisor ultimo modelo','stock' => 30),
                array('code' => 'E33FFD','name' => 'Televisor Led LG 40','description' => 'Televisor ultimo modelo','stock' => 50),
                array('code' => 'OPEE33','name' => 'Televisor Led LG 43','description' => 'Televisor ultimo modelo','stock' => 50),
                array('code' => 'WQ33DD','name' => 'Televisor Led LG 49','description' => 'Televisor ultimo modelo','stock' => 50)
                );

        return view('almacen.index', $data);
    }

    public function update()
    {
        return view('almacen.update');
    }
}
