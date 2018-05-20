<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Http\Requests\AlumnoRequest;*/

class alumnoController extends Controller
{
	

	/*public function mostrar (AlumnoRequest $request) {
		$guarda = $request;
		return response()-> json([
    		'nombre' => $guarda
    	]);
	}*/

    public function mostrar(Request $request) {
    	$guarda = $request->validate([
    		'Nombre' => 'required|max:255',
    		'DNI' => 'required|numeric',
    		'Edad' => 'required|integer',
    		'Email' => 'required|email|unique:users'
    	]);

    	return response()-> json([
    		'nombre' => $guarda
    	]);
    }
}
