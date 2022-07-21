<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Lecturer;
use Illuminate\Http\Request;

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
}
