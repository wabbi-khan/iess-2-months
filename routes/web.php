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

// ? Super admin routes

Route::get('/main-dashboard', [
    InstitutesController::class,
    'main_dashboard',
])->name('main-dashboard');
Route::get('/add-institute', [
    InstitutesController::class,
    'add_institute',
])->name('add-institute');
Route::post('/store-institute', [
    InstitutesController::class,
    'store_institute',
])->name('store-institute');
Route::get('/all-institute', [
    InstitutesController::class,
    'all_institute',
])->name('all-institute');
Route::get('/view-institute/{view}', [
    InstitutesController::class,
    'view_institute',
])->name('view-institute');
Route::get('/delete-institute/{delete}', [
    InstitutesController::class,
    'delete_institute',
])->name('delete-institute');

// ? institues admin panel route
Route::get('/institute-panel', [
    InstitutesController::class,
    'institute_panel',
])->name('institute-panel');

// ? Campus routes
Route::get('/add-campus', [InstitutesController::class, 'add_campus'])->name(
    'add-campus'
);

Route::get('/all-campus', [InstitutesController::class, 'all_campus'])->name(
    'all-campus'
);

Route::get('/campus-general-operation', [
    InstitutesController::class,
    'campus_general_operation',
])->name('campus-general-operation');

Route::get('/campus-hr', [InstitutesController::class, 'campus_hr'])->name(
    'campus-hr'
);

Route::get('/campus-exams', [
    InstitutesController::class,
    'campus_exams',
])->name('campus-exams');

Route::get('/campus-accounts', [
    InstitutesController::class,
    'campus_accounts',
])->name('campus-accounts');

// admission routes
Route::get('/admissions', [InstitutesController::class, 'admissions'])->name(
    'admissions'
);
Route::get('/add-Student', [InstitutesController::class, 'add_Student'])->name(
    'add-Student'
);
