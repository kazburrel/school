<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'fname'=>'required',
            'lname'=>'required',
            'reg_no'=>'nullable',
            'email'=>'required',
            'reg_date'=>'required',
            'department'=>'required',
            'gender'=>'nullable',
            'mobile_no'=>'required',
            'parent_name'=>'required',
            'parents_no'=>'required',
            'birth_date'=>'nullable',
            'address'=>'required',
            'blood_g'=>'required',
            'pro_pic'=>'nullable'
        ];
    }
    public function attributes()
    {
        return [
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'email' => 'Email',
            'reg_date' => 'Registration Date',
            'department' => 'Department',
            'gender' => 'Gender',
            'mobile_no' => 'Mobile Number',
            'parent_name' => "Parent's Name",
            'parents_no' => "Parent's Number",
            'birth_date' => 'Birth Date',
            'address' => 'Address',
            'blood_g' => 'Blood Group',
            'pro_pic' => 'Profile Picture',
            'education' => 'Education'
        ];
    }
}
