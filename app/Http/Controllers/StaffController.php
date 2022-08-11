<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class StaffController extends Controller
{
    public function AddStaff(StoreStaffRequest $request)
    {
        $staff_id = mt_rand(1000, 9999);
        $password = Str::random(10);
        $file = $request->hasFile('staff_avatar') ? $request->file('staff_avatar')->store('StaffPic', 'public') : '';

        // dd($request);
        Staff::create($request->safe()->merge([
            'staff_id' => $staff_id,
            'staff_avatar' => $file,
            'password' => Hash::make($password)
        ])->all());

        // email data
        $email_data = [
            'password' => $password,
            'fname' => $request['fname'],
            'email' => $request['email'],
        ];

        // send email with the template
        Mail::send('welcome_staff_mail', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['fname'], $email_data['password'])
                ->subject('Welcome to My School')
                ->from('info@myschool.com');
        });
        Alert::success('Staff created successfully');
        return redirect()->back();
    }

    public function UpdateStaff(UpdateStaffRequest $request, Staff $staff)
    {
        $file = $request->hasFile('staff_avatar') ? $request->file('staff_avatar')->store('StaffPic', 'public') : $staff->staff_avatar;

        $staff->update($request->safe()->merge([
            'staff_avatar' => $file
        ])->all());
        Alert::success('Staff Updated Successfully');
        return redirect()->back();
    }

    public function BlockStaff(Staff $staff)
    {
        $staff->status = !$staff->status;
        $staff->save();
        return redirect()->back();
    }

    public function DestroyStaff(Staff $staff)
    {
        $staff->delete();
        Alert::success('Staff Deleted Successfully');
        return redirect()->back();
    }
}
