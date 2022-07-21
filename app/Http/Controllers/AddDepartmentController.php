<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartment;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class AddDepartmentController extends Controller
{
    public function DepartmentAdd(StoreDepartment $request)
    {

        $file = $request->hasFile('hod_pic') ? $request->file('hod_pic')->store('hodPic', 'public') : '';

        Department::create($request->safe()->merge([
            'hod_pic' => $file
        ])->all());
        Alert::success('Department Created Successfully');
        return redirect()->back();
    }

    public function UpdateDepartment(UpdateDepartmentRequest $request, Department $department)
    {
        $file = $request->hasFile('hod_pic') ? $request->file('hod_pic')->store('hodPic', 'public') : '';

        $department->update($request->safe()->merge([
            'hod_pic' => $file
        ])->all());

        Alert::success('Department Updated Successfully');
        return redirect()->back();
    }
    public function DestroyDepartment(Department $department){
        $department->delete();
        Alert::success('Department Deleted Successfully');
        return redirect()->back();
    }
}
