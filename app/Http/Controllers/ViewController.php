<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Course;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\LibraryAsset;
use App\Models\Registered_courses;
use App\Models\Staff;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

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
        $departments = Department::all();
        $students = Student::all();
        return view('admin.add_course', ['lecturers' => $lecturers, 'departments' => $departments, 'students' => $students]);
    }

    public function ViewAllCourse()
    {

        $lecturers = Lecturer::all();
        $departments = Department::all();
        // $registeredCourses = Registered_courses::all();
        $courses = Course::search(request(key: 'search'))->paginate(10);
        return view('admin.all_courses', ['courses' => $courses, 'lecturers' => $lecturers, 'departments'=>$departments]);
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
    
    public function attendanceView($course_id)
    {

        $registeredStudents = Registered_courses::whereRaw('json_contains(courses, \'["' . $course_id . '"]\')')->with(['student'])->get();
        return view('admin.attendance', ['regStudents'=> $registeredStudents]);
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
        $user = Auth::user();
        $student = Student::where('id', $user->id)->with(['departmentDetails'])->first();
        return view('main.students.student_profile', ['student'=>$student]);
    } 
    public function ViewStudentsEdit()
    {
        $user = Auth::user();
        $student = Student::where('id', $user->id)->with(['departmentDetails'])->first();
        return view('main.students.student_edit', ['student'=>$student]);
    } 
    public function viewStudentCourseReg()
    {

        $user = Auth::user();
        $department = Department::where('dept_id', $user->department)->with(['courses'])->first();
        $student = Student::where('id', $user->id)->with(['departmentDetails'])->first();
        return view('main.students.register_course', ['department'=>$department, 'student'=>$student]);
    }

    public function viewCourses(){
        $user = Auth::user();
        $student = Student::where('id', $user->id)->with(['departmentDetails'])->first();
        $registeredCourses = Registered_courses::where('reg_no' ,$user->reg_no)->first();
        // dd($registeredCourses->courses);
        $dRegCourses = json_decode($registeredCourses->courses);

        $courseQuery = Course::orderBy('id', 'DESC');
        foreach ($dRegCourses as  $k => $regcourses) {
            if($k == 0){
                $courseQuery->where('course_id', $regcourses); 
            }else{
                $courseQuery->orWhere('course_id', $regcourses);
            } 
        }
        $course_tbl = $courseQuery->get();
        return view('main.students.student_courses', ['student'=>$student, 'course_tbl'=>$course_tbl]);
    }

    public function ViewLecturerDash(){

        
        return view('main.lecturers.lecturer_dashboard');
    }

    public function viewUploadCourses(){
        $user = Auth::user();
        $departments = Department::where('dept_name', $user->department)->with('lecturer')->first();
        $lecturers = Lecturer::where('department', $user->department)->first();
        // dd($departments->dept_id);
        return view('main.lecturers.upload_courses', ['departments' => $departments, 'lecturers'=>$lecturers]);
    }

    public function viewLecturerCourses(){
        $user = Auth::user();
        $courses = Course::where('lecturer_id', $user->lecturer_id)->get();
        // dd($courses);
        return view('main.lecturers.lecturer_courses', ['courses'=>$courses]);
    }

    public function viewLecturerProfile(){
        $user = Auth::user();
        $lecturer = Lecturer::where('lecturer_id', $user->lecturer_id)->with('departmentDetails')->first();
        // dd($lecturer);
        return view('main.lecturers.lecturer_profile', ['lecturer'=>$lecturer]);
    }

    public function viewLecturerEdit(){
        $user = Auth::user();
        $lecturer = Lecturer::where('lecturer_id', $user->lecturer_id)->with('departmentDetails')->first();
        return view('main.lecturers.lecturer_edit', ['lecturer'=>$lecturer]);
    }

    public function attendance($course_id){
        $registeredStudents = Registered_courses::whereRaw('json_contains(courses, \'["' . $course_id . '"]\')')->with('student')->get();
        // $dRegCourses = json_decode($registeredStudents);
        // dd($registeredStudents);

        // $model = Arr::map($dRegCourses, function($value, $key) {

        //     // if($value['class']::where('email', $request->email)->exists()) {
        //         //     return [
        //             //     'guard' => $key, 
        //             //     ];
        //             // }
        //             return $value;
        //         });
                
                // dd($course_id);
        // foreach ($registeredStudents as $registeredStudent) {
        //     foreach ($registeredStudent as  $newvalue) {
        //         dd($newvalue);
        //         $student = Student::where('reg_no', $registeredStudent->reg_no)->first();
                
        //     }
        // }
        // $dRegCourses = json_decode($registeredCourses->courses);
        return view('main.lecturers.lecturer_attendance', ['regStudents'=> $registeredStudents, 'course'=>$course_id]);
    }
}

        // $user = Auth::user();
        // $student = Student::where('id', $user->id)->with(['departmentDetails'])->first();
        // $registeredCourses = Registered_courses::where('reg_no' ,$user->reg_no)->first();
        // $dRegCourses = json_decode($registeredCourses->courses);

        // $courseQuery = Course::orderBy('id', 'DESC');
        // foreach ($dRegCourses as  $k => $regcourses) {
        //     if($k == 0){
        //         $courseQuery->where('course_id', $regcourses); 
        //     }else{
        //         $courseQuery->orWhere('course_id', $regcourses);
        //     } 
        // }
        // $course_tbl = $courseQuery->get();
        // return view('main.students.student_courses', ['student'=>$student, 'course_tbl'=>$course_tbl]);
