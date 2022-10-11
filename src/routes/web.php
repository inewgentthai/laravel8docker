<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\FrontDatatablesController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ExportExcelController;

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

Route::get('/', function () {
    return view('welcome');
});

// Test Redis
Route::get('/store', function() {
    Redis::set('Bangkok', 'Krung Thep Maha Nakhon');
});

Route::get('/retrieve', function() {
    return Redis::get('Bangkok');
});

// Test Mailhog
Route::get('/send-email', function() {
    Mail::to('suraches@mail.dev')->send(new TestMail);
});

Auth::routes();

Route::get('/home', [FrontHomeController::class, 'index'])->name('home');
Route::get('/test', [FrontDatatablesController::class, 'index'])->name('datatables');
Route::get('/test/export', [FrontDatatablesController::class, 'export'])->name('export');

Route::get('users/export/', [UsersController::class, 'export']);

Route::get('/export_excel', [ExportExcelController::class, 'index']);
Route::get('/export_excel/excel', [ExportExcelController::class, 'excel'])->name('export_excel.excel');
