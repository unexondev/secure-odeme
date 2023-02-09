<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\CashoutController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, "logout"]);

Route::post("/register", [AuthController::class, "register"])->name("register");

Route::post("/login", [AuthController::class, "login"])->name("login");

Route::middleware("auth:sanctum")->prefix("user")->group(function() {

    Route::get("/fetch", [UserController::class, "fetch"]);
    Route::post("/set_btc_address", [UserController::class, "set_btc_address"]);

});

Route::middleware("auth:sanctum")->prefix("payments")->group(function() {

    Route::get("/fetch", [PaymentController::class, "fetch"]);
    Route::post("/add", [PaymentController::class, "add"]);
    Route::post("/verify", [PaymentController::class, "verify"]);

});

Route::middleware("auth:sanctum")->prefix("links")->group(function() {

    Route::get("/fetch", [LinkController::class, "fetch"]);
    Route::post("/add", [LinkController::class, "add"]);
    Route::post("/remove", [LinkController::class, "remove"]);

});

Route::middleware("auth:sanctum")->prefix("cashouts")->group(function() {

    Route::get("/fetch", [CashoutController::class, "fetch"]);
    Route::post("/create", [CashoutController::class, "create"]);
    Route::post("/delete", [CashoutController::class, "delete"]);
    Route::post("/set_paid", [CashoutController::class, "set_paid"]);

});