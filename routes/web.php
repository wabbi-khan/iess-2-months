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
Route::get('/view-student', [
    InstitutesController::class,
    'view_student',
])->name('view-student');

Route::get('/view-attendance', [
    InstitutesController::class,
    'view_attendance',
])->name('view-attendance');

// ? add classes and section routes
Route::get('/all-classes', [InstitutesController::class, 'all_classes'])->name(
    'all-classes'
);
Route::get('/add-class', [InstitutesController::class, 'add_class'])->name(
    'add-class'
);
Route::get('/add-section', [InstitutesController::class, 'add_section'])->name(
    'add-section'
);

// ? Promote Students

Route::get('/pro-student', [InstitutesController::class, 'pro_student'])->name(
    'pro-student'
);
Route::get('/pro-studentClassData', [
    InstitutesController::class,
    'pro_studentClassData',
])->name('pro-studentClassData');

// ? My profile
Route::get('/my-profile', [InstitutesController::class, 'my_profile'])->name(
    'my-profile'
);
Route::get('/acc-setting', [InstitutesController::class, 'acc_setting'])->name(
    'acc-setting'
);

// ? subjects
Route::get('/all-subjects', [
    InstitutesController::class,
    'all_subjects',
])->name('all-subjects');
Route::get('/add-subject', [InstitutesController::class, 'add_subject'])->name(
    'add-subject'
);

// ? syllabus
Route::get('/all-syllabus', [
    InstitutesController::class,
    'all_syllabus',
])->name('all-syllabus');
Route::get('/add-syllabus', [
    InstitutesController::class,
    'add_syllabus',
])->name('add-syllabus');
// ? former student
Route::get('/former-student', [
    InstitutesController::class,
    'former_student',
])->name('former-student');

// ? View Result
Route::get('/view-result', [InstitutesController::class, 'view_result'])->name(
    'view-result'
);

// ? View Time Table
Route::get('/view-timeTable', [
    InstitutesController::class,
    'view_timeTable',
])->name('view-timeTable');
//General Operation End

// Digital Library
Route::get('/digital-library', [
    InstitutesController::class,
    'digital_library',
])->name('digital-library');
Route::get('/add-new-category', [
    InstitutesController::class,
    'add_new_category',
])->name('add-new-category');
Route::get('/all-books', [InstitutesController::class, 'all_books'])->name(
    'all-books'
);
Route::get('/add-new-book', [
    InstitutesController::class,
    'add_new_book',
])->name('add-new-book');
Route::get('/book-reservation', [
    InstitutesController::class,
    'book_reservation',
])->name('book-reservation');
Route::get('/new-reservation', [
    InstitutesController::class,
    'new_reservation',
])->name('new-reservation');
Route::get('/return-book', [
    InstitutesController::class,
    'returned_book',
])->name('return-book');
Route::get('/book-renewal', [
    InstitutesController::class,
    'book_renewal',
])->name('book-renewal');
Route::get('/all-fine', [InstitutesController::class, 'all_fine'])->name(
    'all-fine'
);
Route::get('/add-new-fine', [
    InstitutesController::class,
    'add_new_fine',
])->name('add-new-fine');
Route::get('/supplier-profile', [
    InstitutesController::class,
    'supplier_profile',
])->name('supplier-profile');
Route::get('/add-new-supplier', [
    InstitutesController::class,
    'add_new_supplier',
])->name('add-new-supplier');

// ? HR(Screens) Employee form
Route::get('/all-employees', [
    InstitutesController::class,
    'all_employees',
])->name('all-employees');
Route::get('/add-employees', [
    InstitutesController::class,
    'add_employees',
])->name('add-employees');

// ? Employee attendance
Route::get('/employees-attendance', [
    InstitutesController::class,
    'employees_attendance',
])->name('employees-attendance');
Route::get('/add-attendance', [
    InstitutesController::class,
    'add_attendance',
])->name('add-attendance');

// employee holiay
Route::get('/all-holidays', [
    InstitutesController::class,
    'all_holidays',
])->name('all-holidays');

// ? Employee leave
Route::get('/employee-leave', [
    InstitutesController::class,
    'employee_leave',
])->name('employee-leave');
Route::get('/add-employee-leave', [
    InstitutesController::class,
    'add_employee_leave',
])->name('add-employee-leave');
