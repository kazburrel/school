<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Course;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\LibraryAsset;
use App\Models\Staff;
use App\Models\Student;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ViewController extends Controller
{
    public function AddlecturerView()
    {
        $departments = Department::all();

        return view('admin.add_lecturer', ['departments' => $departments]);
    }

    public function ViewAllLecturer()
    {
        $departments = Department::all();
        $lecturers = Lecturer::search(request(key: 'search'))->paginate(10);
        return view('admin.all_lecturers', ['lecturers' => $lecturers, 'departments' => $departments]);
    }

    public function DashboardView()
    {
        return view('admin.dashboard');
    }

    public function AddDepartmentsView()
    {
        return view('admin.add_department');
    }

    public function ViewAllDepartment()
    {
        // $departments = Department::paginate(10);
        $departments = Department::search(request(key: 'search'))->paginate(10);
        return view('admin.all_departments', ['departments' => $departments]);
    }

    public function AddStudentView()
    {
        $departments = Department::all();
        return view('admin.add_student', ['departments' => $departments]);
    }

    public function ViewAllStudent()
    {
        $departments = Department::all();
        $students = Student::search(request(key: 'search'))->paginate(10);
        return view('admin.all_students', ['students' => $students, 'departments' => $departments]);
    }

    public function ViewAddCourse()
    {

        $lecturers = Lecturer::all();
        return view('admin.add_course', ['lecturers' => $lecturers]);
    }

    public function ViewAllCourse()
    {

        $lecturers = Lecturer::all();
        $courses = Course::search(request(key: 'search'))->paginate(10);
        return view('admin.all_courses', ['courses' => $courses, 'lecturers' => $lecturers]);
    }

    public function ViewAddStaff()
    {
        return view('admin.add_staff');
    }

    public function ViewAllStaff()
    {

        $staffs = Staff::search(request(key: 'search'))->paginate(10);
        return view('admin.all_staff', ['staffs' => $staffs]);
    }

    public function AddLibraryAssetView()
    {

        $departments = Department::all();
        return view('admin.add_libraryAsset', ['departments' => $departments]);
    }

    public function ViewLibraryAsset()
    {

        $departments = Department::all();
        $assets = LibraryAsset::search(request(key: 'search'))->paginate(10);
        return view('admin.all_library_asset', ['assets' => $assets, 'departments' => $departments]);
    }

    public function ViewAdmin()
    {

        $admins = Admin::search(request(key: 'search'))->paginate(10);
        return view('admin.all_admin', ['admins' => $admins]);
    }

    public function AddAdmin()
    {
        return view('admin.add_admin');
    }

    // MAIN BEGINS

    public function HomeView()
    {
        return view('main.home');
    }

    public function AboutView()
    {
        return view('main.about');
    }
    
    public function ContactView()
    {
        return view('main.contact');
    }

    public function ShopView()
    {
        return view('main.shop');
    }
    public function ShopCartView()
    {
        return view('main.shop_cart');
    }
    public function ShopCheckoutView()
    {
        return view('main.shop_checkout');
    }
    public function ShopDetailsView()
    {
        return view('main.shop_details');
    }
    public function ShopOrdersView()
    {
        return view('main.shop_orders');
    } 
    
    public function CourseListView()
    {
        return view('main.course_list');
    }
    
    public function CourseCatView()
    {
        return view('main.course_category');
    }
    
    public function CourseDetailsView()
    {
        return view('main.course_details');
    }
    
    public function RegisterView()
    {
        return view('main.register');
    } 
    
    public function LoginView()
    {
        return view('main.login');
    } 
    
    public function ViewStudentsDash()
    {
        return view('main.students.student_dashboard');
    } 
    
    public function ViewStudentsProfile()
    {
        return view('main.students.student_profile');
    } 
    public function ViewStudentsEdit()
    {
        return view('main.students.student_edit');
    }


}
