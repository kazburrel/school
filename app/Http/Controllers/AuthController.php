<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    private function authModels(){
        return [
            'student' => [
                'class' => Student::class, 
            ],
        ];
    }

    /**
     * Authentication for mutilple model guards
     * 
     * - Each guard is registered in the auth models function as a multi-dimensional array
     * - In the authenticate function map through the auth models array and check which model has the logged in email
     * - If the email exists, return an array with the guard and and the route
     * - Next, check wether the length array returned is greater than 0 
     * - If the length is not greater than 0, return the error message (That means that none of the authentication models had the email)
     * - Else get the guard from the mapped array result
     */
    public function authenticate(StoreAuthRequest $request){
        $model = Arr::map($this->authModels(), function($value, $key) use($request) {
            if($value['class']::where('email', $request->email)->exists()) return [
                'guard' => $key, 
            ];
        });

        if(!$model && count($model) < 1) return back()->withErrors(['email' => 'Invalid Credentials'], 'login')->onlyInput('email');

        $guard = array_keys($model)[0];

        auth()->guard($guard);

        if (auth($guard)->attempt($request->all(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect(route($guard));
        }

        return back()->withErrors(['email' => 'Invalid Credentials'], 'login')->onlyInput('email');
    }

}
