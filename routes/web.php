<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthStudent\LoginController;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
Route::get('/user/logout',[Auth\LoginController::class,'logoutUser'])->name('user.logout');


// Route User = Akademik

Route::get('/akademik', [AkademikController::class,'index'])->name('akademik');
Route::get('/akademik/akademik', [AkademikController::class,'akademik'])->name('akademik.akademik');
Route::get('/akademik/create', [AkademikController::class,'create'])->name('akademik.create');
Route::post('/akademik/store', [AkademikController::class,'store'])->name('akademik.store');
Route::get('/akademik/show', [AkademikController::class,'show'])->name('akademik.show');
Route::get('/akademik/edit/{id}', [AkademikController::class,'edit'])->name('akademik.edit');
Route::delete('/akademik/destroy/{id}', [AkademikController::class,'destroy'])->name('akademik.destroy');
// Route akademik mengolad data students
Route::get('/akademik/students', [AkademikController::class,'students'])->name('akademik.students');
Route::get('/akademik/create_students', [AkademikController::class,'create_students'])->name('akademik.create_students');
Route::post('/akademik/store_students', [AkademikController::class,'store_students'])->name('akademik.store_students');
Route::get('/akademik/show_students/{id}', [AkademikController::class,'show_students'])->name('akademik.show_students');
Route::get('/akademik/edit_students/{id}', [AkademikController::class,'edit_students'])->name('akademik.edit_students');
Route::put('/akademik/update_students/{id}', [AkademikController::class,'update_students'])->name('akademik.update_students');
Route::delete('/akademik/destroy_students/{id}', [AkademikController::class,'destroy_students'])->name('akademik.destroy_students');
// Route akademik mengolad data lectures
Route::get('/akademik/admin', [AkademikController::class,'admin'])->name('akademik.admin');
Route::get('/akademik/create_admin', [AkademikController::class,'create_admin'])->name('akademik.create_admin');
Route::post('/akademik/store_admin', [AkademikController::class,'store_admin'])->name('akademik.store_admin');
Route::get('/akademik/show_admin/{id}', [AkademikController::class,'show_admin'])->name('akademik.show_admin');
Route::get('/akademik/edit_admin/{id}', [AkademikController::class,'edit_admin'])->name('akademik.edit_admin');
Route::put('/akademik/update_admin/{id}', [AkademikController::class,'update_admin'])->name('akademik.update_admin');
Route::delete('/akademik/destroy_admin/{id}', [AkademikController::class,'destroy_admin'])->name('akademik.destroy_admin');
// Route akademik mengolad data lectures
Route::get('/akademik/lectures', [AkademikController::class,'lectures'])->name('akademik.lectures');
Route::get('/akademik/create_lectures', [AkademikController::class,'create_lectures'])->name('akademik.create_lectures');
Route::post('/akademik/store_lectures', [AkademikController::class,'store_lectures'])->name('akademik.store_lectures');
Route::get('/akademik/show_lectures/{id}', [AkademikController::class,'show_lectures'])->name('akademik.show_lectures');
Route::get('/akademik/edit_lectures/{id}', [AkademikController::class,'edit_lectures'])->name('akademik.edit_lectures');
Route::put('/akademik/update_lectures/{id}', [AkademikController::class,'update_lectures'])->name('akademik.update_lectures');
Route::delete('/akademik/destroy_lectures/{id}', [AkademikController::class,'destroy_lectures'])->name('akademik.destroy_lectures');


// Route User = Admin
Route::get('/admin', [AdminController::class,'index'])->name('admin');
// Route admin mengolad data courses
Route::get('/admin/courses', [AdminController::class,'courses'])->name('admin.courses');
Route::get('/admin/create_courses', [AdminController::class,'create_courses'])->name('admin.create_courses');
Route::post('/admin/store_courses', [AdminController::class,'store_courses'])->name('admin.store_courses');
Route::get('/admin/edit_courses/{id}', [AdminController::class,'edit_courses'])->name('admin.edit_courses');
Route::put('/admin/update_courses/{id}', [AdminController::class,'update_courses'])->name('admin.update_courses');
Route::delete('/admin/destroy_courses/{id}', [AdminController::class,'destroy_courses'])->name('admin.destroy_courses');


// Route User = Students
Route::get('/student', [StudentController::class,'index'])->name('student');
Route::get('/student/login', [LoginController::class,'showLoginForm'])->name('student.login');
Route::post('/student/login', [LoginController::class,'login'])->name('student.login.submit');
Route::get('/user/logout',[LoginController::class,'logout'])->name('student.logout');

// Route admin mengolad data pribadi/show
Route::get('/student/show', [StudentController::class,'show'])->name('student.show');
Route::get('/student/edit_student/', [StudentController::class,'edit'])->name('student.edit_student');
Route::put('/student/update_student/{id}', [StudentController::class,'update'])->name('student.update_student');
// Route admin mengolad data sks/course
Route::get('/student/course_student', [StudentController::class,'course_student'])->name('student.course_student');
Route::get('/student/create_course_student', [StudentController::class,'create_course_student'])->name('student.create_course_student');
Route::post('/student/store_course_student', [StudentController::class,'store_course_student'])->name('student.store_course_student');
Route::delete('/student/destroy_course_student/{id}', [StudentController::class,'destroy_course_student'])->name('student.destroy_course_student');
