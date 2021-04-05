<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/custom', function(){
    $someData = [1, 2, 3];
    return $someData;
});
Route::get('/districts','TestController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/child1', function(){

    return view('test.child1');
});

Route::get('/child2', 'TestController@child2');
Route::get('/addCountry', 'CountryController@create');
Route::post('/insertCountry', 'CountryController@store');
Route::get('/displayCountry', 'CountryController@index');
Route::get('/editedCountry/{id}', 'CountryController@show');
Route::put('/updateCountry/{id}', 'CountryController@update');
Route::get('deleteCountry/{id}', 'CountryController@destroy');
Route::get('addStudent', 'StudentController@create');
Route::post('addStudent', 'StudentController@store');
Route::get('getStudents', 'StudentController@index');

