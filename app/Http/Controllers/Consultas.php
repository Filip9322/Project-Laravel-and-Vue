<?php

namespace App\Http\Controllers;

use App\Todoso;
use Illuminate\Http\Request;

//use App\Http\Requests;

class Consultas extends Controller
{
	public function home(){
		
		$todosos = Todoso::all();

		return view('management', [
			'todosos' => $todosos,
		]);
	}
}
