<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Lecturer;
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
        $lecturers = Lecturer::search(request(key:'search'))->paginate(5);
        return view('admin.all_lecturers', ['lecturers' => $lecturers,'departments' => $departments ]);
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
        // $departments = Department::paginate(5);
        $departments = Department::search(request(key:'search'))->paginate(5);
        return view('admin.all_departments', ['departments' => $departments]);
    }

    public function AddStudentView(){
        $departments = Department::all();
        return view('admin.add_student', ['departments' => $departments]);
    }

    public function ViewAllStudent(){
        $departments = Department::all();
        $students = Student::search(request(key:'search'))->paginate(5);
        return view('admin.all_students', ['students'=>$students,'departments' => $departments]);
    }

    public function ViewAddCourse(){

        $lecturers = Lecturer::all();
        return view('admin.add_course', ['lecturers'=>$lecturers]);
    }

    public function ViewAllCourse(){

        $lecturers = Lecturer::all();
        $courses = Course::search(request(key:'search'))->paginate(5);
        return view('admin.all_courses', ['courses'=>$courses, 'lecturers'=>$lecturers]);
    }
}
