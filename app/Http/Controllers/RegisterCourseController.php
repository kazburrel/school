<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisteredCourses;
use App\Models\Course;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\Registered_courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterCourseController extends Controller
{
    public function registerCourses(StoreRegisteredCourses $request){
        // $courses = $request->courses;
        // $lecturer = Course::orderBy('id', 'DESC')->with('lecturerDetails');
        // foreach ($courses as $k =>  $course) {
        //     if($k == 0){
        //         $lecturer->where('course_id', $course); 
        //     }else{
        //         $lecturer->orWhere('course_id', $course);
        //     } 
        // }
        // $lect = $lecturer->get();

        // for ($i=0; $i < count($lect); $i++) { 
        //     $details = $lect;
        // }
        // dd($details);

        // foreach($lect as $key => $lec) { 
        //     $details = $key;
        //     // foreach ($details as $value) {
        //     //     $details  = $value->lecturerDetails->lecturer_id;
        //     // }
        //     dd($details);
        // } 
        
        // dd($lect);
        $reg_course_id = mt_rand(1000, 9999);
        $user = Auth::user();
        $encodeCourses = json_encode($request->courses);
        $registered_course = Registered_courses::where(['reg_no'=>$user->reg_no, 'dept_id'=>$user->department])->first();
        if ($registered_course){
             Alert::success('You have already registred your courses');
             return redirect()->back();
        }
        
        Registered_courses::create($request->safe()->merge([
            'reg_course_id' => $reg_course_id,
            'courses' => $encodeCourses,
            'reg_no' => $user->reg_no ,
            'dept_id' =>  $user->department,
        ])->all());
        Alert::success('Course registered Successfully');
        return redirect()->back();
    }

    
}
