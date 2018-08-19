<?php
use app\Post;
use app\User;
use app\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::resource('comments', 'CommentsController');

Route::get('/', function () {
    $comments = Comment::all();
    $users = DB::table('users')->where('email', 'timothy.j.lee.cs@gmail.com')->first();
    $posts = Post::where('user_id', $users->id)->orderBy('created_at', 'desc')->paginate(5);
    return view('welcome')->with(array('posts' => $posts));
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/siteindex', function () {
    return view('index');
});
Route::get('/addpost', function () {
    return view('addpost');
});


Auth::routes();

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', array('as' => 'index', 'uses' => 'PostsController@getIndex'));
Route::get('/admin', array('as' => 'admin_area', 'uses' =>
'PostsController@getAdmin'));
Route::post('/add', array('as' => 'add_new_post', 'uses' =>
'PostsController@postAdd'));
Route::post('/login', array('as' => 'login', 'uses' =>
'UsersController@postLogin'));
Route::get('/logout', array('as' => 'logout', 'uses' =>
'UsersController@getLogout'));
