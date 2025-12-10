<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
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
Route::get('/intro', 'LandingpageController@index');

// flytrust stert 
Route::get('/', 'HomeController@index');
Route::get('/flight',[HomeController::class, 'flight'])->name('flight');
Route::get('/tour',[HomeController::class, 'tour'])->name('tour');
Route::get('/hotel',[HomeController::class, 'hotel'])->name('hotel');
Route::get('/visa',[HomeController::class, 'visa'])->name('visa');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/support-policy', [
    'uses' => 'App\Http\Controllers\HomeController@supportpolicy',
    'as'   => 'supportpolicy',
]);

Route::get('/privacy-policy', [
    'uses' => 'App\Http\Controllers\HomeController@privacypolicy',
    'as'   => 'privacypolicy',
]);

Route::get('/terms', [
    'uses' => 'App\Http\Controllers\HomeController@terms',
    'as'   => 'terms',
]);
// flytrust end 



Route::get('/home', 'HomeController@index')->name('home');
Route::post('/install/check-db', 'HomeController@checkConnectDatabase');

// Social Login
Route::get('social-login/{provider}', 'Auth\LoginController@socialLogin');
Route::get('social-callback/{provider}', 'Auth\LoginController@socialCallBack');

// Logs
Route::get(config('admin.admin_route_prefix') . '/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware(['auth', 'dashboard', 'system_log_view'])->name('admin.logs');

Route::get('/install', 'InstallerController@redirectToRequirement')->name('LaravelInstaller::welcome');
Route::get('/install/environment', 'InstallerController@redirectToWizard')->name('LaravelInstaller::environment');
Route::fallback([\Modules\Core\Controllers\FallbackController::class, 'FallBack']);

// Hide page update default
Route::get('/update', 'InstallerController@redirectToHome');
Route::get('/update/overview', 'InstallerController@redirectToHome');
Route::get('/update/database', 'InstallerController@redirectToHome');
