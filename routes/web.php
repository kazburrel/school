<?php

use App\Http\Controllers\AddDepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\LibraryAssetController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
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
    Route::get('/add_student', [ViewController::class, 'AddStudentView']);
    Route::post('/add_student', [StudentController::class, 'AddStudent']);
    Route::get('/all_students', [ViewController::class, 'ViewAllStudent']);
    Route::put('/all_students/{student}', [StudentController::class, 'UpdateStudent']);
    Route::delete('/all_students/{student}', [StudentController::class, 'DestroyStudent']);
    Route::get('/add_course', [ViewController::class, 'ViewAddCourse']);
    Route::post('/add_course', [CourseController::class, 'AddCourse']);
    Route::put('/add_course/{course}', [CourseController::class, 'UpdateCourse']);
    Route::get('/all_courses', [ViewController::class, 'ViewAllCourse']);
    Route::delete('/all_courses/{course}', [CourseController::class, 'DestroyCourse']);
    Route::get('/add_staff', [ViewController::class, 'ViewAddStaff']);
    Route::post('/add_staff', [StaffController::class, 'AddStaff']);
    Route::get('/all_staff', [ViewController::class, 'ViewAllStaff']);
    Route::put('/all_staff/{staff}', [StaffController::class, 'UpdateStaff']);
    Route::delete('/all_staff/{staff}', [StaffController::class, 'DestroyStaff']);
    Route::get('/add_libraryAsset', [ViewController::class, 'AddLibraryAssetView']);
    Route::post('/add_libraryAsset', [LibraryAssetController::class, 'AddLibraryAsset']);
    Route::get('/all_library_asset', [ViewController::class, 'ViewLibraryAsset']);
    Route::put('/all_library_asset/{asset}', [LibraryAssetController::class, 'UpdateLibraryAsset']);
    Route::delete('/all_library_asset/{asset}', [LibraryAssetController::class, 'DeleteLibraryAsset']);
});

