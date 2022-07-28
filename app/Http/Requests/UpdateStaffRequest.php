<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'join_date' => 'required',
            'department' => 'required',
            'gender' => 'required',
            'mobile_no' => 'required',
            'birth_date' => 'nullable',
            'address' => 'required',
            'staff_avatar' => 'nullable',
            'education' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'email' => 'Email',
            'join_date' => 'Joining Date',
            'department' => 'Department',
            'gender' => 'Gender',
            'mobile_no' => 'Mobile Number',
            'birth_date' => 'Birth Date',
            'address' => 'Address',
            'staff_avatar' => 'Profile Picture',
            'education' => 'Education'
        ];
    }
}
