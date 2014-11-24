<?php

App::bind('\User','Datacenter\User\User');

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function showLogin()
    {
        // Verificar si hay sesion activa
        if (Auth::check())
        {
            // Mostrar el dashboard
            return Redirect::to('/');
        }

        return View::make('login');
    }

    public function doLogin()
    {
        $data = Input::only('username','password');

        if (Auth::attempt($data,Input::get('remember')))
        {
            return Redirect::intended('/');
        }

        return Redirect::back()->with('error_message','Datos invalidos')->withInput();
    }

    public function doLogout()
    {
        Auth::logout();

        return Redirect::to('login')->with('logout_message','Sesion cerrada exitosamente');
    }

}
