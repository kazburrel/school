<?php

use App\Http\Controllers\AddDepartmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::prefix('/admin')->group(function () {

    Route::get('/dashboard', [ViewController::class, 'DashboardView']);
    Route::get('/add_lecturer', [ViewController::class, 'AddlecturerView']);
    Route::post('/add_lecturer', [LecturerController::class, 'CreateLecturer']);
    Route::get('/all_lecturer', [ViewController::class, 'ViewAllLecturer']);
    Route::put('/all_lecturer/{lecturer}', [LecturerController::class, 'UpdateLecturer']);
    Route::get('/all_lecturer/{lecturer}', [LecturerController::class, 'BlockLecturer']);
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
    Route::get('/all_student/{student}', [StudentController::class, 'BlockStudent']);
    Route::delete('/all_students/{student}', [StudentController::class, 'DestroyStudent']);
    Route::get('/add_course', [ViewController::class, 'ViewAddCourse']);
    Route::post('/add_course', [CourseController::class, 'AddCourse']);
    Route::put('/add_course/{course}', [CourseController::class, 'UpdateCourse']);
    Route::post('/all_course/{course}', [CourseController::class, 'StoreLike']);
    Route::get('/all_courses', [ViewController::class, 'ViewAllCourse']);
    Route::delete('/all_courses/{course}', [CourseController::class, 'DestroyCourse']);
    Route::get('/add_staff', [ViewController::class, 'ViewAddStaff']);
    Route::post('/add_staff', [StaffController::class, 'AddStaff']);
    Route::get('/all_staff', [ViewController::class, 'ViewAllStaff']);
    Route::put('/all_staff/{staff}', [StaffController::class, 'UpdateStaff']);
    Route::get('/all_staff/{staff}', [StaffController::class, 'BlockStaff']);
    Route::delete('/all_staff/{staff}', [StaffController::class, 'DestroyStaff']);
    Route::get('/add_libraryAsset', [ViewController::class, 'AddLibraryAssetView']);
    Route::post('/add_libraryAsset', [LibraryAssetController::class, 'AddLibraryAsset']);
    Route::get('/all_library_asset', [ViewController::class, 'ViewLibraryAsset']);
    Route::put('/all_library_asset/{asset}', [LibraryAssetController::class, 'UpdateLibraryAsset']);
    Route::delete('/all_library_asset/{asset}', [LibraryAssetController::class, 'DeleteLibraryAsset']);
    Route::get('/all_admin', [ViewController::class, 'ViewAdmin']);
    Route::get('/add_admin', [ViewController::class, 'AddAdmin']);
    Route::post('/add_admin', [AdminController::class, 'AddAdmin']);
    Route::put('/all_admin/{admin}', [AdminController::class, 'UpdateAdmin']);
    Route::get('/all_admin/{admin}', [AdminController::class, 'BlockAdmin']);
    Route::delete('/all_admin/{admin}', [AdminController::class, 'DestroyAdmin']);
});

// MAIN PAGES
Route::get('/', [ViewController::class, 'HomeView']);
Route::get('/about', [ViewController::class, 'AboutView']);
Route::get('/contact', [ViewController::class, 'ContactView']);
Route::get('/shop', [ViewController::class, 'ShopView']);
Route::get('/shop_cart', [ViewController::class, 'ShopCartView']);
Route::get('/shop_checkout', [ViewController::class, 'ShopCheckoutView']);
Route::get('/shop_details', [ViewController::class, 'ShopDetailsView']);
Route::get('/shop_orders', [ViewController::class, 'ShopOrdersView']);
Route::get('/course_list', [ViewController::class, 'CourseListView']);
Route::get('/course_category', [ViewController::class, 'CourseCatView']);
Route::get('/course_details', [ViewController::class, 'CourseDetailsView']);
Route::get('/register', [ViewController::class, 'RegisterView']);
Route::get('/login', [ViewController::class, 'LoginView'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate']);


// Student pages
Route::prefix('/main/students')->middleware(['role:student', 'auth:student'])->group(function () {
    Route::get('/student_dashboard', [ViewController::class, 'ViewStudentsDash'])->name('student');
    Route::get('/student_profile', [ViewController::class, 'ViewStudentsProfile']);
    Route::get('/student_edit', [ViewController::class, 'ViewStudentsEdit']);
    Route::get('/logout', [StudentController::class, 'StudentLogout']);
});
