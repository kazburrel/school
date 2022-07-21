<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDepartment extends FormRequest
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
            'dept_name' => ['required', Rule::unique('departments', 'dept_name')],
            'hod' => 'required',
            'hod_pic' => 'required',
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
