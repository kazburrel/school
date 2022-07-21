<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartmentRequest extends FormRequest
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

    public function rules()
    {
        return [
            'dept_name' => 'required',
            'hod' => 'required',
            'hod_pic' => 'nullable',
            'join_date' => 'required',
            'stu_cap' => 'required',
            'dept_details' => 'required'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'dept_name' => "department's name",
            'hod' => "hod's name",
            'hod_pic' => "hod's picture",
            'join_date' => 'join date',
            'stu_cap' => "student's capacity",
            'dept_details' => "department's details",
        ];
    }
}
