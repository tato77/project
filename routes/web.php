<?php

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


Route::get('/', function () {
    return view('welcome');
}); 

Route::get('index','PagesController@home');
Route::get('contact','PagesController@contact');
Route::get('about','PagesController@about');
//comment 

Auth::routes();
//Route::get('home','HomeController@index');
Route::resource('latters','LatterController');
Route::resource('lattertypes','LattertypeController');
Route::get('outbox','LatterController@outbox');
Route::get('/download/{file}', 'LatterController@download');

Route::get('/changePassword','UserController@showChangePasswordForm')->name('changePassword');
Route::post('/changePassword','UserController@changePassword')->name('changePassword');

Route::resource('committeemembers','CommitteemembersController');
Route::resource('committees','CommitteeController');
Route::get('Department-Reports','ReportConttroller@report');
Route::get('user-Reports','ReportConttroller@ureport');
Route::resource('users','UserController');
Route::resource('grads','GradController');
Route::resource('jobs','JobController'); 
Route::resource('depts','DeptController');
Route::post('comments/{latter_id}', ['as' => 'comments.store', 'uses'=>'CommentController@store']);

Route::get('home','HomeController@index');
Route::get('logout','Auth\LoginController@userLogout')->name('user.logout');

