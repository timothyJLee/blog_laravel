<?php

namespace app\Http\Controllers;

use app\Http\Controllers\Controller;
use Auth;
use app\Post;
use app\User;
use app\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Eloquent; 

class PostsController extends Controller{
	public function getIndex()
	{
		//$posts = Auth::User()->Post()->orderBy('created_at', 'desc')->paginate(5);
		//$posts = Post::where('email', 'timothy.j.lee.cs@gmail.com')->orderBy('created_at', 'desc')->paginate(5);
		//$comments = Comment::all();
		$users = DB::table('users')->where('email', 'timothy.j.lee.cs@gmail.com')->first();
		$posts = Post::where('user_id', $users->id)->orderBy('created_at', 'desc')->paginate(5);
		//return View::make('welcome')->with(array('posts' => $posts, 'comments' => $comments));
		return View::make('welcome')->with(array('posts' => $posts));

	}

	public function getAdmin()
	{
		return View::make('addpost');
	}

	public function postAdd()
	{
		
		//$users = User::find(1);
		Post::create(array(
		'title' => Input::get('title'),
		'body' => Input::get('body'),
		'user_id' => Auth::User()->id));
		return Redirect::route('index');
	}
}
