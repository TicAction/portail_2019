<?php

use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

 */



Auth::routes();

Route::get('', 'HomeController@index')->name('home');
Route::get('/mes-comportements','HomeController@behaviors')->name('my_behaviors');
Route::get('/student/pdf/{student}','StudentController@export_pdf')->name('export_pdf');
Route::get('/pi/pdf/{pi}','PiController@export_pdf')->name('pi_pdf');
Route::get('enseignant/classe/{id}','StudentController@classroom')->name('student_classroom');



Route::get('comportement','BehaviorController@index')->name('behavior_index');
Route::get('comportement/creation/{id}','BehaviorController@create')->name('behavior_create');
Route::post('comportement','BehaviorController@store')->name('behavior_store');
Route::get('comportement/{id}/','BehaviorController@show')->name('behavior_show');
Route::get('comportement/{behavior}/modifier','BehaviorController@edit')->name('behavior_edit');
Route::put('comportement/{behavior}','BehaviorController@update')->name('behavior_update');
Route::delete('comportement/{behavior}','BehaviorController@destroy')->name('behavior_delete');

Route::get('/eleve','StudentController@index')->name('student_index');
Route::get('eleve/creation','StudentController@create')->name('student_create');
Route::post('eleve','StudentController@store')->name('student_store');
Route::get('eleve/{student}','StudentController@show')->name('student_show');
Route::get('eleve/{student}/modifier','StudentController@edit')->name('student_edit');
Route::put('eleve/{student}','StudentController@update')->name('student_update');
Route::delete('eleve/{student}','StudentController@destroy')->name('student_delete');

Route::get('/plan_intervention','PiController@index')->name('pi_index');
Route::get('plan_intervention/creation','PiController@create')->name('pi_create');
Route::post('plan_intervention','PiController@store')->name('pi_store');
Route::get('plan_intervention/{pi}','PiController@show')->name('pi_show');
Route::get('plan_intervention/{pi}/modifier','PiController@edit')->name('pi_edit');
Route::put('plan_intervention/{pi}','PiController@update')->name('pi_update');
Route::delete('plan_intervention/{pi}','PiController@destroy')->name('pi_delete');

Route::get('/intervention','InterventionController@index')->name('intervention_index');
Route::get('intervention/creation','InterventionController@create')->name('intervention_create');
Route::post('intervention','InterventionController@store')->name('intervention_store');
Route::get('intervention/{intervention}','InterventionController@show')->name('intervention_show');
Route::get('intervention/{intervention}/modifier','InterventionController@edit')->name('intervention_edit');
Route::put('intervention/{intervention}','InterventionController@update')->name('intervention_update');
Route::delete('intervention/{intervention}','InterventionController@destroy')->name('intervention_delete');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('observation','ObservationController');