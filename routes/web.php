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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teachers', 'HomeController@teachers')->name('teachers');
Route::get('/estimate', 'HomeController@estimate')->name('estimate');
Route::get('/attestation', 'HomeController@attestation')->name('attestation');
Route::get('/student', 'HomeController@student')->name('student');



Route::middleware(['web',])->group(function () {
    Route::resources([
        'faculty'   => 'FacultyController',
        'cathedra'  => 'CathedraController',
        'group'     => 'GroupController',
        'specialty' => 'SpecialtyController',
        'subject'   => 'SubjectController',
        'user'      => 'UserController',
    ]);

    Route::post('/specialty_subjects', 'SpecialtyController@subjects');
});