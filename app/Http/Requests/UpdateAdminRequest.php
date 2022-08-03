<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            'gender' => 'required',
            'mobile_no' => 'required',
            'birth_date' => 'nullable',
            'address' => 'required',
            'admin_avatar' => 'nullable',
            'education' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'email' => 'Email',
            'join_date' => 'Joining Date',
            'gender' => 'Gender',
            'mobile_no' => 'Mobile Number',
            'birth_date' => 'Birth Date',
            'address' => 'Address',
            'admin_avatar' => 'Profile Picture',
            'education' => 'Education'
        ];
    }
}
