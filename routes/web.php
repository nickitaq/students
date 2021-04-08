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
    return view('auth.login');
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
//Route::get('/addCountry', 'CountriController@create');
Route::get('/addCountry', function(){
    return view ('country.create');
});
Route::post('/insertCountry', 'CountriController@store');
Route::get('/displayCountry', 'CountriController@index');
Route::get('/editedCountry/{id}', 'CountriController@show');
Route::put('/updateCountry/{id}', 'CountriController@update');
Route::get('deleteCountry/{id}', 'CountriController@destroy');
Route::get('addStudent', 'StudentController@create');
Route::post('addStudent', 'StudentController@store');
Route::get('getStudents', 'StudentController@index');
Route::get('addAttendance', 'AttendanceController@create');
Route::post('submitAttendance', 'AttendanceController@store');
Route::get('getAttendance', 'AttendanceController@index');
Route::get('search', 'SearchController@index');

Route::get('/allCourses', 'CourseController@index');




