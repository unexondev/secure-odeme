<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\RefcodeController;
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

// Private routes

Route::post("/admin/login", [AdminController::class, "login"]);

Route::middleware("auth:admin")->prefix("admin")->group(function() {

    Route::get("/check", function() {});

    Route::prefix("users")->group(function() {

        Route::post("/fetch", [UserController::class, "_fetch"]);
        Route::post("/remove", [UserController::class, "_remove"]);
        Route::post("/update", [UserController::class, "_update"]);

    });

    Route::prefix("refcodes")->group(function() {

        Route::post("/fetch", [RefcodeController::class, "_fetch"]);
        Route::post("/create", [RefcodeController::class, "_create"]);
        Route::post("/remove", [RefcodeController::class, "_remove"]);
        Route::post("/update", [RefcodeController::class, "_update"]);

    });

    Route::prefix("bank-accounts")->group(function() {

        Route::post("/fetch", [BankAccountController::class, "_fetch"]);
        Route::post("/create", [BankAccountController::class, "_create"]);
        Route::post("/remove", [BankAccountController::class, "_remove"]);
        Route::post("/update", [BankAccountController::class, "_update"]);

    });

    Route::prefix("links")->group(function() {

        Route::post("/fetch", [LinkController::class, "_fetch"]);
        Route::post("/remove", [LinkController::class, "_remove"]);
        Route::post("/update", [LinkController::class, "_update"]);

    });

    Route::prefix("cashout-requests")->group(function() {

        Route::post("/fetch", [CashoutController::class, "_fetch"]);
        Route::post("/remove", [CashoutController::class, "_remove"]);
        Route::post("/update", [CashoutController::class, "_update"]);

    });

    Route::prefix("payments")->group(function() {

        Route::post("/fetch", [PaymentController::class, "_fetch"]);
        Route::post("/remove", [PaymentController::class, "_remove"]);
        Route::post("/verify", [PaymentController::class, "_verify"]);
        Route::post("/get-receipt", [PaymentController::class, "_get_receipt"]);
        Route::post("/update", [PaymentController::class, "_update"]);

    });

});

Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, "logout"]);

Route::post("/register", [AuthController::class, "register"]);

Route::post("/login", [AuthController::class, "login"]);

Route::middleware("auth:sanctum")->prefix("user")->group(function() {

    Route::get("/fetch", [UserController::class, "fetch"]);
    Route::post("/set_btc_address", [UserController::class, "set_btc_address"]);

});

Route::middleware("auth:sanctum")->prefix("payments")->group(function() {

    Route::get("/fetch", [PaymentController::class, "fetch"]);
    Route::post("/verify", [PaymentController::class, "verify"]);

});

Route::middleware("auth:sanctum")->prefix("links")->group(function() {

    Route::get("/fetch", [LinkController::class, "fetch"]);
    Route::post("/add", [LinkController::class, "add"]);
    Route::post("/set-ad-images", [LinkController::class, "set_ad_images"]);
    Route::post("/remove", [LinkController::class, "remove"]);

});

Route::middleware("auth:sanctum")->prefix("cashout-requests")->group(function() {

    Route::get("/fetch", [CashoutController::class, "fetch"]);
    Route::post("/create", [CashoutController::class, "create"]);
    Route::post("/delete", [CashoutController::class, "delete"]);
    Route::post("/set_paid", [CashoutController::class, "set_paid"]);

});

// Public routes

Route::prefix("payments")->group(function() {

    Route::post("/add", [PaymentController::class, "add"]);

});