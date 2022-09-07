<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendanceRequest;
use App\Models\Attendance;
use App\Models\Course;
use App\Models\Lecturer;
use App\Models\Registered_courses;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AttendanceController extends Controller
{

    function createDataArray($request, $studentReg){
        return [
            'course'=>$request->course,
            'lecturer'=>$request->lecturer,
            'student'=>$studentReg,	
            'date'=>$request->date,
            'created_at'=>Carbon::now()->toDateTimeString(),
            'updated_at'=>Carbon::now()->toDateTimeString(),
            'deleted_at'=>null,
            'attendance'=>$request->option
        ];
    }
public function attendanceMark(StoreAttendanceRequest $request){
    // dd($request->all());
    $user = Auth::user();       
    $attendance = $request->attendance = $request->attendance === null ? [] : $request->attendance;
    $request->lecturer = $user->lecturer_id;
    $arrayToInsert = [];
    foreach ($request->student as $value) {
        $request->option = in_array($value, $attendance) ? 'present' : 'absent';
        $arrayToInsert[] = $this->createDataArray($request, $value);
    }
    $insert = count($arrayToInsert) > 0 ? Attendance::insert($arrayToInsert) : 0;
    
   $insert ? Alert::success('Attendance Taken Successfully') : '' ;
    return redirect()->back();

}
}

/**
 * attendance_id
 * attendance_checkbox
 * course_id
 * lecturer_id
 * student_reg_no
 */
