<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\StoreLecturerRequest;
use App\Http\Requests\StoreUpdatePassword;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Http\Requests\UpdateLecturerRequest;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class LecturerController extends Controller
{
    public function CreateLecturer(StoreLecturerRequest $request){
        $lecturer_id = mt_rand(1000, 9999);
        $password = Str::random(10);
        $file = $request->hasFile('pro_pic') ? $request->file('pro_pic')->store('LecturerPic', 'public') : '';

        Lecturer::create($request->safe()->merge([
            'lecturer_id'=>$lecturer_id,
            'pro_pic' => $file,
            'password' => Hash::make($password)
        ])->all());
           // email data
           $email_data = [
            'password' => $password,
            'fname' => $request['fname'],
            'email' => $request['email'],
        ];

         // send email with the template
         Mail::send('welcome_lecturers_mail', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['fname'], $email_data['password'])
                ->subject('Welcome to My School')
                ->from('info@myschool.com');
        });
        Alert::success('Lecturer Created Successfully');
        return redirect()->back();
    }

    public function UpdateLecturer(UpdateLecturerRequest $request, Lecturer $lecturer)
    {
        $file = $request->hasFile('pro_pic') ? $request->file('pro_pic')->store('LecturerPic', 'public') : $lecturer->pro_pic;

        $lecturer->update($request->safe()->merge([
            'pro_pic' => $file
        ])->all());
        Alert::success('Lecturer Updated Successfully');
        return redirect()->back();
    }

    public function addEvent(StoreEventsRequest $request){
        
        dd($request);


    }

    public function BlockLecturer(Lecturer $lecturer)
    {
        $lecturer->status = !$lecturer->status;
        $lecturer->save();
        return redirect()->back();
    }

    public function DestroyLecturer(Lecturer $lecturer)
    {
        $lecturer->delete();
        Alert::success('Lecturer Deleted Successfully');
        return redirect()->back();
    }

    public function lecturerPasswordUpdate(StoreUpdatePassword $request){
        $response = Auth::check(['password' => $request->currentpassword]);
        if (!$response) return redirect()->back()->withErrors('Your current password does not matches with the password.');

        $lecturer = Auth::user();
        $lecturer = Lecturer::find($lecturer->lecturer_id);
        // dd($student);
        $lecturer->password = hash::make($request->get('newpassword'));
        $lecturer->save();
        Alert::success('Password updated successfully');
        return redirect()->back();
    }

    public function lecturerLogout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
