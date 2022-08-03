<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
   

    public function AddStudent(StoreStudentRequest $request)
    {

        $year = date('Y');
        $regNo = $year . "/" . mt_rand(100000, 999999);
        $file = $request->hasFile('pro_pic') ? $request->file('pro_pic')->store('StudentPic', 'public') : '';

        // dd($request);
        Student::create($request->safe()->merge([
            'department' => $request->department,
            'reg_no' => $regNo,
            'pro_pic' => $file
        ])->all());
        Alert::success('Student Created Successfully');
        return redirect()->back();
    }

    public function UpdateStudent(UpdateStudentRequest $request, Student $student){

        $file = $request->hasFile('pro_pic') ? $request->file('pro_pic')->store('StudentPic', 'public') : $student->pro_pic;

        $student->update($request->safe()->merge([
            'pro_pic' => $file
        ])->all());

        Alert::success('Student Updated Successfully');
        return redirect()->back();
    }

    public function BlockStudent(Student $student)
    {
        $student->status = !$student->status;
        $student->save();
        return redirect()->back();
    }

    public function DestroyStudent(Student $student)
    {
        $student->delete();
        Alert::success('Student Deleted Successfully');
        return redirect()->back();
    }

    
}
