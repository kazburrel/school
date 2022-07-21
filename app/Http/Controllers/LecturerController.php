<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLecturerRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Http\Requests\UpdateLecturerRequest;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LecturerController extends Controller
{
    public function CreateLecturer(StoreLecturerRequest $request){
        $file = $request->hasFile('pro_pic') ? $request->file('pro_pic')->store('LecturerPic', 'public') : '';

        Lecturer::create($request->safe()->merge([
            'pro_pic' => $file
        ])->all());
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

    public function DestroyLecturer(Lecturer $lecturer)
    {
        $lecturer->delete();
        Alert::success('Lecturer Deleted Successfully');
        return redirect()->back();
    }
}
