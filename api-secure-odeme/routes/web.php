<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdController;

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


Route::domain("www.sahibinden.".config("app.domain"))->group(function() {

	Route::get("/ilan/{link_id}/detay", [ AdController::class, "sahibinden"]);
	Route::get("/giris/{link_id}", [ AdController::class, "sahibinden_login_mobile"]);
	Route::get("/param-guvende/odeme-yap/{link_id}", [ AdController::class, "paramguvende"]);

});