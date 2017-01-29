<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/admin', function () {
    return redirect()->route('dashboard');
});
// front end Routes available from both auth and guest
Route::get('/', ['as'=> 'index', 'uses' => 'User\BlogController@index']);
Route::get('fullBlog/{id}', ['as'=> 'fullBlog','uses' => 'User\BlogController@show']);
Route::get('blogs/{id}/catagory', ['as'=> 'blog.catagory.show','uses' => 'User\BlogController@blogByCatagory']);
Route::get('blogs/{id}/writer', ['as'=> 'blog.writer.show','uses' => 'User\BlogController@blogByWriter']);
Route::get('about', ['as'=> 'about','uses' => 'User\BlogController@info']);
// test route
Route::get('test/index', ['as'=> 'test','uses' => 'BlogController@index']);


Route::group(['middleware' => 'guest'], function(){

	Route::get('login', ['as'=> 'login','uses' => 'Auth\AuthController@getlogin']);
	Route::post('login', ['as'=> 'postlogin','uses' => 'Auth\AuthController@postlogin']);

	Route::get('register', ['as'=> 'register', 'uses' => 'Auth\AuthController@getRegister']);
	Route::post('register', ['as'=> 'postregister','uses' => 'Auth\AuthController@postRegister']);

	Route::get('user/activate', ['as'=>'activation','uses' => 'UsersController@activate']);
	Route::get('register/activate', ['as'=>'user.doactivate','uses' => 'UsersController@doActivate']);

	// Password reset link request routes...
	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	// Password reset routes...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');

});


Route::group(array('middleware' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'Auth\AuthController@profile']);
	Route::get('edit-profile', ['as' => 'edit.profile', 'uses' => 'UsersController@edit']);
	Route::post('edit-profile', ['as' => 'post.edit.profile', 'uses' => 'UsersController@update']);
	Route::post('edit-photo', ['as' => 'post.edit.photo', 'uses' => 'UsersController@photoUpdate']);
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));

	//User Profile routes
	Route::get('user/profile',['as' => 'user.profile', 'uses' => 'Auth\AuthController@profile']);
	Route::get('user/edit/{id}/profile',['as' => 'user.edit', 'uses' => 'Auth\AuthController@editProfile']);
	Route::put('user/update/{id}/profile',['as' => 'user.update', 'uses' => 'Auth\AuthController@doEditProfile']);

	//BlogCRUD
	Route::get('blog/index',['as' => 'blog.index', 'uses' => 'BlogController@index']);
	Route::get('blog/create',['as' => 'blog.create', 'uses' => 'BlogController@create']);
	Route::post('blog/store',['as' => 'blog.store', 'uses' => 'BlogController@store']);
	Route::get('blog/edit/{id}',['as' => 'blog.edit', 'uses' => 'BlogController@edit']);
	Route::put('blog/update/{id}',['as' => 'blog.update', 'uses' => 'BlogController@update']);
	Route::get('blog/show/{id}',['as' => 'blog.show', 'uses' => 'BlogController@show']);
	Route::post('blog/delete/{id}',['as' => 'blog.delete', 'uses' => 'BlogController@destroy']);

});

Route::group(['middleware' => ['auth', 'role:admin']], function()
{
	
	
	
	

	// DemoCRUD 
	Route::get('demo',['as' => 'demo.index', 'uses' => 'DemoController@index']);
	Route::get('demo/create',['as' => 'demo.create', 'uses' => 'DemoController@create']);
	Route::post('demo',['as' => 'demo.store', 'uses' => 'DemoController@store']);
	Route::get('demo/{id}/edit',['as' => 'demo.edit', 'uses' => 'DemoController@edit']);
	Route::get('demo/{id}/show',['as' => 'demo.show', 'uses' => 'DemoController@show']);
	Route::put('demo/{id}',['as' => 'demo.update', 'uses' => 'DemoController@update']);
	Route::delete('demo/{id}',['as' => 'demo.delete', 'uses' => 'DemoController@destroy']);
	
});

	
