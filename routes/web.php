<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
// use App\Http\Controllers\TeamProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\GeneralController::class, 'index'])->name('welcome');
Route::get('/contact-us', [App\Http\Controllers\GeneralController::class, 'contactus'])->name('contactus');
Route::get('/about-us', [App\Http\Controllers\GeneralController::class, 'aboutus'])->name('aboutus');
Route::get('/donate', [App\Http\Controllers\GeneralController::class, 'donatenow'])->name('donatenow');
Route::get('/team-single/{slug}', [App\Http\Controllers\GeneralController::class, 'singleteam'])->name('team.single');
Route::get('/ourprograms', [App\Http\Controllers\GeneralController::class, 'ourprograms'])->name('ourprograms');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', 'UserController');

    Route::resource('permission', 'PermissionController');


    Route::get('/profile', 'UserController@profile')->name('user.profile');

    Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');

    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');

    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');

    Route::prefix('setting')->group(function () {
    Route::get('/website-setting/edit', 'SettingController@edit')->name('website-setting.edit');
    Route::post('/website-setting/update/{id}', 'SettingController@update')->name('website-setting.update');
    // Route::get('/website-setting/edit', 		 [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('website-setting.edit');
    // Route::post('/website-setting/update/{id}',  [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('website-setting.update');

    // Team Profile :::::::::::::::::::::::::::::::->
    Route::resource('team_profiles', 'TeamProfileController');


    // Event Magazine Route Starts Here ::::::::::::::
		Route::get('event/magazine/view', [EventController::class, 'index'])->name("event.index");
		Route::get('event/magazine/create', [EventController::class, 'create'])->name("event.create");
		Route::post('event/magazine/store', [EventController::class, 'store'])->name("event.store");
		Route::get('event/magazine/edit/{id}', [EventController::class, 'edit'])->name("event.edit");
		Route::put('event/magazine/update/{id}', [EventController::class, 'update'])->name("event.update");
		Route::delete('event/magazine/destroy/{id}', [EventController::class, 'destroy'])->name("event.destroy");
});

});


Route::group(['middleware' => ['auth', 'role_or_permission:admin|create role|create permission']], function() {

    Route::resource('role', 'RoleController');


});







Auth::routes();


//////////////////////////////// axios request

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "UserController@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
Route::put('/account/update/{id}', 'UserController@update');
Route::delete('/delete/user/{id}', 'UserController@delete');
Route::get('/search/user', 'UserController@search');

