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

// sectin literatie
//Route::resources('literatie','LiteracyController');
Route::get('/cleaning/web/site', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    return redirect('');
});


//
Auth::routes();

//Partie de la direction

Route::get('admin/index','Director\AdminController@index')->name('admin.index');
Route::get('admin/pi','Director\AdminController@pi')->name('admin.pi');
Route::get('admin/classe/{id}','Director\AdminController@classroom')->name('admin.classroom');

//admin behaviors
Route::get('admin/comportement/{behavior}/modifier','Director\BehaviorController@edit')->name('admin.behavior.edit');
Route::get('admin/comportement/creation/{id}','Director\BehaviorController@create')->name('admin.behavior.create');
Route::put('admin/comportement/{behavior}','Director\BehaviorController@update')->name('admin.behavior.update');

Route::get('admin/comportement/{id}','Director\AdminController@show')->name('admin.behavior.show');
Route::post('admin/comportement/recherche','Director\AdminController@search')->name('admin.behavior.search');

Route::post('admin/comportement','Director\BehaviorController@store')->name('admin.behavior.store');
Route::delete('admin/comportement/{behavior}','Director\BehaviorController@destroy')->name('admin.behavior.destroy');


//Partie de la SDG

Route::get('sdg/index','Director\AdminController@index')->name('sdg.index');
Route::get('sdg/pi','Director\AdminController@pi')->name('sdg.pi');
Route::get('sdg/classe/{id}','Director\AdminController@classroom')->name('sdg.classroom');

//sdg behaviors
Route::get('sdg/comportement/{behavior}/modifier','Director\BehaviorController@edit')->name('sdg.behavior.edit');
Route::get('sdg/comportement/creation/{id}','Director\BehaviorController@create')->name('sdg.behavior.create');
Route::put('sdg/comportement/{behavior}','Director\BehaviorController@update')->name('sdg.behavior.update');

Route::post('sdg/comportement','Director\BehaviorController@store')->name('sdg.behavior.store');
Route::delete('sdg/comportement/{behavior}','Director\BehaviorController@destroy')->name('sdg.behavior.destroy');


// méli-mélo

Route::get('', 'HomeController@index')->name('home');
Route::get('/mes-comportements','HomeController@behaviors')->name('my_behaviors');
Route::get('/student/pdf/{student}','StudentController@export_pdf')->name('export_pdf');
Route::get('/pi/pdf/{pi}','PiController@export_pdf')->name('pi_pdf');
Route::get('enseignant/classe/{id}','StudentController@classroom')->name('student_classroom');


//Comportements

Route::get('comportement','BehaviorController@index')->name('behavior.index');
Route::get('comportement/creation/{id}','BehaviorController@create')->name('behavior.create');
Route::post('comportement','BehaviorController@store')->name('behavior.store');
Route::get('comportement/{id}/','BehaviorController@show')->name('behavior.show');
Route::get('comportement/{behavior}/modifier','BehaviorController@edit')->name('behavior.edit');
Route::put('comportement/{behavior}','BehaviorController@update')->name('behavior.update');
Route::delete('comportement/{behavior}','BehaviorController@destroy')->name('behavior.delete');

// Élèves

Route::get('/eleve','StudentController@index')->name('student_index');
Route::get('eleve/creation','StudentController@create')->name('student_create');
Route::post('eleve','StudentController@store')->name('student_store');
Route::get('eleve/{student}','StudentController@show')->name('student_show');
Route::get('eleve/{student}/modifier','StudentController@edit')->name('student_edit');
Route::put('eleve/{student}','StudentController@update')->name('student_update');
Route::delete('eleve/{student}','StudentController@destroy')->name('student_delete');

// PIA

Route::get('/plan_intervention','PiController@index')->name('pi_index');
Route::get('plan_intervention/creation','PiController@create')->name('pi_create');
Route::post('plan_intervention','PiController@store')->name('pi_store');
Route::get('plan_intervention/{pi}','PiController@show')->name('pi_show');
Route::get('plan_intervention/{pi}/modifier','PiController@edit')->name('pi_edit');
Route::put('plan_intervention/{pi}','PiController@update')->name('pi_update');
Route::delete('plan_intervention/{pi}','PiController@destroy')->name('pi_delete');

//Intervention

Route::get('/intervention','InterventionController@index')->name('intervention_index');
Route::get('intervention/creation','InterventionController@create')->name('intervention_create');
Route::post('intervention','InterventionController@store')->name('intervention_store');
Route::get('intervention/{intervention}','InterventionController@show')->name('intervention_show');
Route::get('intervention/{intervention}/modifier','InterventionController@edit')->name('intervention_edit');
Route::put('intervention/{intervention}','InterventionController@update')->name('intervention_update');
Route::delete('intervention/{intervention}','InterventionController@destroy')->name('intervention_delete');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Observation
Route::resource('observation','ObservationController');