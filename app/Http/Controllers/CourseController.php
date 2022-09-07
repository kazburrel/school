<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\StoreLikeRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    public function AddCourse(StoreCourseRequest $request){
        $course_id = mt_rand(1000, 9999);
        $file = $request->hasFile('course_avatar') ? $request->file('course_avatar')->store('CourseAvatar', 'public') : '';
        // dd($request->lecturer);
        Course::create($request->safe()->merge([
            'course_id' => $course_id,
            'department'=>$request->department,
            'lecturer_id' => $request->lecturer,
            'course_avatar' => $file
        ])->all());
        Alert::success('Course Created Successfully');
        return redirect()->back();
    }

    public function UpdateCourse(UpdateCourseRequest $request, Course $course){
        $file = $request->hasFile('course_avatar') ? $request->file('course_avatar')->store('CourseAvatar', 'public') : $course->course_avatar;

        $course->update($request->safe()->merge([
            'course_avatar' => $file
        ])->all());
        Alert::success('Course Updated Successfully');
        return redirect()->back();
    }

    public function StoreLike(StoreLikeRequest $request){
        
    }

    public function DestroyCourse(Course $course){

        $course->delete();
        Alert::success('Course Deleted Successfully');
        return redirect()->back();
    }
}
