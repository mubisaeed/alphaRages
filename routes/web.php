<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RatesController;
use App\Http\Controllers\SendersController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [LoginController::class, 'loginPage'])->name('loginPage');
Route::post('/loginUser', [LoginController::class, 'loginUser'])->name('login_user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function()
{
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::group(['prefix' => 'client'], function()
    {
        Route::get('/', [ClientsController::class, 'index'])->name('clients');
        Route::get('/create', [ ClientsController::class, 'create'])->name('create-client');
        Route::post('/store', [ClientsController::class, 'store'])->name('store-client');
        Route::get('/show/{id}', [ClientsController::class, 'show'])->name('show-client');
    });

//    Route::group(['prefix' => 'sender'], function()
//    {
//        Route::get('/', [SendersController::class, 'index'])->name('senders');
//        Route::get('/create', [ SendersController::class, 'create'])->name('create-sender');
//        Route::post('/store', [SendersController::class, 'store'])->name('store-sender');
//        Route::get('/show/{id}', [SendersController::class, 'show'])->name('show-sender');
//    });

    Route::group(['prefix' => 'account'], function()
    {
        Route::get('/', [AccountsController::class, 'index'])->name('accounts');
        Route::get('/create', [ AccountsController::class, 'create'])->name('create-account');
        Route::post('/store', [AccountsController::class, 'store'])->name('store-account');
        Route::get('/show/{id}', [AccountsController::class, 'show'])->name('show-account');
    });

    Route::group(['prefix' => 'invoice'], function()
    {
        Route::get('/', [InvoiceController::class, 'index'])->name('invoices');
        Route::get('/create', [ InvoiceController::class, 'create'])->name('create-invoice');
        Route::post('/', [InvoiceController::class, 'store'])->name('store-invoice');
        Route::post('/rate', [InvoiceController::class, 'rate'])->name('rate-subTotal');
    });

});

