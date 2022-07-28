<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StaffController extends Controller
{
   public function AddStaff(StoreStaffRequest $request){
    $staff_id = mt_rand(1000, 9999);
    $file = $request->hasFile('staff_avatar') ? $request->file('staff_avatar')->store('StaffPic', 'public') : '';

    // dd($request);
    Staff::create($request->safe()->merge([
        'staff_id'=>$staff_id,
        'staff_avatar' => $file
    ])->all());
    Alert::success('Staff Created Successfully');
    return redirect()->back();
   }

   public function UpdateStaff(UpdateStaffRequest $request, Staff $staff){
    $file = $request->hasFile('staff_avatar') ? $request->file('staff_avatar')->store('StaffPic', 'public') : $staff->staff_avatar;

    $staff->update($request->safe()->merge([
        'staff_avatar' => $file
    ])->all());
    Alert::success('Staff Updated Successfully');
    return redirect()->back();
   }

   public function DestroyStaff(Staff $staff){
    $staff->delete();
    Alert::success('Staff Deleted Successfully');
    return redirect()->back();
   }
}
