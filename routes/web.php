<?php

use App\Http\Controllers\AddDepartmentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ViewController;
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

Route::prefix('/admin')->group(function () {

    Route::get('/dashboard', [ViewController::class, 'DashboardView']);
    Route::get('/add_lecturer', [ViewController::class, 'AddlecturerView']);
    Route::post('/add_lecturer', [LecturerController::class, 'CreateLecturer']);
    Route::get('/all_lecturer', [ViewController::class, 'ViewAllLecturer']);
    Route::put('/all_lecturer/{lecturer}', [LecturerController::class, 'UpdateLecturer']);
    Route::delete('/all_lecturer/{lecturer}', [LecturerController::class, 'DestroyLecturer']);
    Route::get('/add_department', [ViewController::class, 'AddDepartmentsView']);
    Route::post('/add_department', [AddDepartmentController::class, 'DepartmentAdd']);
    Route::get('/all_departments', [ViewController::class, 'ViewAllDepartment']);
    Route::put('/all_departments/{department}', [AddDepartmentController::class, 'UpdateDepartment']);
    Route::delete('/all_departments/{department}', [AddDepartmentController::class, 'DestroyDepartment']);
});

