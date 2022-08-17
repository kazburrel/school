<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class StudentController extends Controller
{


    public function AddStudent(StoreStudentRequest $request)
    {

        $year = date('Y');
        $regNo = $year . "/" . mt_rand(100000, 999999);
        $password = Str::random(10);
        $file = $request->hasFile('pro_pic') ? $request->file('pro_pic')->store('StudentPic', 'public') : '';

        Student::create($request->safe()->merge([
            'department' => $request->department,
            'reg_no' => $regNo,
            'pro_pic' => $file,
            'password' => hash::make($password)
        ])->all());
        // email data
        $email_data = [
            'reg_no' => $regNo,
            'password' => $password,
            'fname' => $request['fname'],
            'email' => $request['email'],
        ];

        // send email with the template
        Mail::send('welcome_mail', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['fname'], $email_data['password'], $email_data['reg_no'])
                ->subject('Welcome to My School')
                ->from('info@myschool.com');
        });

        // dd($request);
        Alert::success('Student created successfully');
        return redirect()->back();
    }

    public function UpdateStudent(UpdateStudentRequest $request, Student $student)
    {

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

    public function StudentLogout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
