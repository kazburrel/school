<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\StoreStudentRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {

        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (auth()->attempt($fields)) {
            $request->session()->regenerate();

            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'], 'login')->onlyInput('email');
    }
}
