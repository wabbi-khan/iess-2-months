<?php

use App\Http\Controllers\InstitutesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main-dashboard', [InstitutesController::class, 'main_dashboard'])->name('main-dashboard');
Route::get('/add-institute', [InstitutesController::class, 'add_institute'])->name('add-institute');
Route::post('/store-institute', [InstitutesController::class, 'store_institute'])->name('store-institute');
Route::get('/all-institute', [InstitutesController::class, 'all_institute'])->name('all-institute');
Route::get('/view-institute/{view}', [InstitutesController::class, 'view_institute'])->name('view-institute');
Route::get('/delete-institute/{delete}', [InstitutesController::class, 'delete_institute'])->name('delete-institute');


// ? Campus routes
Route::get('/add-campus', [InstitutesController::class, 'add_campus'])->name('add-campus');
Route::get('/all-campus', [InstitutesController::class, 'all_campus'])->name('all-campus');