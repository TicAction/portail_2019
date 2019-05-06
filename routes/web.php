<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

 */
//test
Route::group(['prefix' => 'admin'], function () {
    Route::get('/register', 'DirectorAuth\RegisterController@showRegistrationForm');
    Route::post('register', 'DirectorAuth\RegisterController@register')->name('director.register');
    Route::get('director', 'DirectorAuth\AdminController@director')->name('admin')->middleware('admin');
});

//fin du test

//test
Route::group(['prefix' => 'sdg'], function () {
    Route::get('/service_de_garde', 'SdgAuth\SdgController@sdg')->name('sdg')->middleware('sdg');
    Route::get('/register', 'SdgAuth\RegisterController@showRegistrationForm');
    Route::post('register', 'SdgAuth\RegisterController@register')->name('sdg.register');
});

//fin du test

// sectin literatie
//Route::resources('literatie','LiteracyController');
Route::get('/cleaning/web/site', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    return redirect('');
});
// Ortho route for login
Route::group(['prefix'=>'ortho'], function() {

// Login Routes...
    Route::get('login', ['as' => 'ortho.login', 'uses' => 'OrthoAuth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'ortho.login.post', 'uses' => 'OrthoAuth\LoginController@login']);
    Route::post('logout', ['as' => 'ortho.logout', 'uses' => 'OrthoAuth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'register', 'uses' => 'OrthoAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register.post', 'uses' => 'OrthoAuth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'OrthoAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'OrthoAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'OrthoAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'OrthoAuth\ResetPasswordController@reset']);
});

//
Auth::routes();



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