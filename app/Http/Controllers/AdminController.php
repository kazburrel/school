<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function AddAdmin(StoreAdminRequest $request)
    {
        $admin_id = mt_rand(1000, 9999);
        $file = $request->hasFile('admin_avatar') ? $request->file('admin_avatar')->store('AdminAvatars', 'public') : '';
        Admin::create($request->safe()->merge([
            'admin_unique_id' => $admin_id,
            'admin_avatar' => $file
        ])->all());
        Alert::success('Admin Created Successfully');
        return redirect()->back();
    }

    public function UpdateAdmin(UpdateAdminRequest $request, Admin $admin)
    {
        $file = $request->hasFile('admin_avatar') ? $request->file('admin_avatar')->store('AdminAvatars', 'public') : $admin->admin_avatar;
        $admin->update($request->safe()->merge([
            'admin_avatar' => $file
        ])->all());
        Alert::success('Admin Updated Successfully');
        return redirect()->back();
    }

    public function BlockAdmin(Admin $admin)
    {
        // dd($admin);
        $admin->status = !$admin->status;
        $admin->save();
        return redirect()->back();
    }
    public function DestroyAdmin(Admin $admin)
    {
        $admin->delete();
        Alert::success('Admin Deleted Successfully');
        return redirect()->back();
    }
}
