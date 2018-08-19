<?php

namespace app\Http\Controllers;
use app\Http\Controllers\Controller;
use app\Http\Controllers\PostsController;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;



class UsersController extends Controller{
	public function postLogin()
	{
		Auth::attempt(array('email' => Input::get('email'),
		'password' => Input::get('password')));
		return Redirect::route('admin_area');
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::route('index');
	}
}
