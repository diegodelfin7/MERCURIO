<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TiendaController extends Controller
{
    //
      public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
    	$data['stores'] = array(
    			array('code' => 'TII3323','name' => 'Tottus Mall Plaza Atoncongo','host' => 'Juan Roberto Silva','atention' => '9:00am - 22:00pm'),
                array('code' => 'TII3663','name' => 'Tottus Open Plaza Atoncongo','host' => 'Freddy Vasquez Poma','atention' => '9:00am - 22:00pm'),
                array('code' => 'TII3997','name' => 'Tottus Open Plaza Angamos','host' => 'Alvaro Loayza Orellana','atention' => '9:00am - 22:00pm'),
                array('code' => 'TII8233','name' => 'Tottus Mall Plaza Angamos','host' => 'Daniel Amaro Villajulca','atention' => '9:00am - 22:00pm')
                );
		
        return view('tienda.index', $data);
    }


    public function update(){
    	return view('tienda.update');
    }
}
