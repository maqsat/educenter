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
Route::get('/estimate', 'HomeController@estimate')->name('estimate');
Route::get('/estimated', 'HomeController@estimated')->name('estimated');
Route::get('/attestation', 'HomeController@attestation')->name('attestation');
Route::get('/student', 'HomeController@student')->name('student');



Route::middleware(['web','auth'])->group(function () {
    Route::resources([
        'faculty'   => 'FacultyController',
        'cathedra'  => 'CathedraController',
        'group'     => 'GroupController',
        'specialty' => 'SpecialtyController',
        'subject'   => 'SubjectController',
        'user'      => 'UserController',
    ]);

    Route::post('/group_subjects', 'GroupController@subjects');
});


Route::get('/logout', 'UserController@logout');
Route::get('/profile', 'UserController@profile');
Route::get('/teachers-group', 'GroupController@teachersGroup')->name('teachersGroup');