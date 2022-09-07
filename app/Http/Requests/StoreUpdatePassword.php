<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUpdatePassword extends FormRequest
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
            'currentpassword' => 'required',
            'newpassword' => ['required', 'confirmed', 'min:6', 'alpha_num', 'max:16', 'different:currentpassword'],
            // 'newpassword' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()]
        ];
    }

    public function attributes()
    {
        return [
            'currentpassword' => 'Current password',
            'newpassword' => 'New password'
        ];
    }
}
