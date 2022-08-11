<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStaffRequest extends FormRequest
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
            'email' => ['required', 'email', Rule::unique('staff', 'email')],
            'join_date' => 'required',
            // 'password' => ['required', 'confirmed', 'min:6'],
            'department' => 'required',
            'gender' => 'required',
            'mobile_no' => 'required',
            'birth_date' => 'required',
            'address' => 'required',
            'staff_avatar' => 'required',
            'education' => 'required',
            'status' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'email' => 'Email',
            'join_date' => 'Joining Date',
            // 'password' => 'Password',
            // 'password_confirmation' => 'Password Confirmation',
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
