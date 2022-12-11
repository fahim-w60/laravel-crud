<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SectionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[StudentController::class,'index'])->name('home');
Route::post('/add-student',[StudentController::class,'save_student'])->name('save.student');
Route::get('/manage-student',[StudentController::class,'manage_student'])->name('manage.student');
Route::get('/edit-student/{id}',[StudentController::class,'edit'])->name('edit.student');
Route::post('/update-student',[StudentController::class,'update'])->name('student.update');
Route::post('/delete-student',[StudentController::class,'delete_student'])->name('student.delete');

Route::get('/add-department',[DepartmentController::class,'dept_index'])->name('add.dept');
Route::post('/save-department',[DepartmentController::class,'save_dept'])->name('save.dept');
Route::get('/manage-department',[DepartmentController::class,'manage_dept'])->name('manage.dept');
Route::get('/edit-dept/{id}',[DepartmentController::class,'edit_dept'])->name('edit.dept');
Route::post('/update-department',[DepartmentController::class,'update_dept'])->name('update.dept');
Route::post('/delete-department',[DepartmentController::class,'delete_dept'])->name('delete.dept');

Route::get('/section',[SectionController::class,'index_section'])->name('section');
Route::post('/add-section',[SectionController::class,'save_section'])->name('save.section');
Route::get('/manage-section',[SectionController::class,'manage_section'])->name('manage.section');
Route::get('/edit-section/{id}',[SectionController::class,'edit_section'])->name('edit.section');
Route::post('/update-section',[SectionController::class,'update_sec'])->name('update.section');
Route::post('/delete-section',[SectionController::class,'delete_sec'])->name('delete.section');