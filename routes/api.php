<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/login/{$accion}', function () {

	if($accion == "login")
	{
		$b = array( "estado" => 1, "user" => Auth::user());
		return json_encode($b);
	}
	else
	{
		$b = array( "estado" => 0);
		return json_encode($b);
	}

    return Auth::user()->name;
});

