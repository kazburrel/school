<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'course_name'=> ['required', Rule::unique('courses', 'course_name')],
            'course_code'=> 'required',
            'course_det'=>'required',
            'start_date'=>'required',
            'course_duration'=>'required',
            'course_price'=>'required',
            'max_student'=>'required',
            'course_avatar'=>'required',
        ];
    }
    public function attributes()
    {
        return [
            'course_name'=> 'Course Name',
            'course_code'=> 'Course Code',
            'course_det'=>'Course Details',
            'start_date'=>'Start Date',
            'course_duration'=>'Course duration',
            'course_price'=>'Course Price',
            'lecturer'=>'Lecturer',
            'max_student'=>'Maximum Students',
            'course_avatar'=>'Avatar',
        ];
    }
}
