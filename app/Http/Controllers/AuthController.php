<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Lecturer;
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
             'lecturer' => [
                'class' => Lecturer::class, 
            ],
        ];
    }
    

    /**
     * Authentication for mutilple model guards
     * - Each guard is registered in the auth models function as a multi-dimensional array
     * - In the authenticate function map through the auth models array and check which model has the logged in email
     * - If the email exists, return an array with the guard and and the route
     * - Next, check wether the length array returned is greater than 0 
     * - If the length is not greater than 0, return the error message (That means that none of the authentication models had the email)
     * - Else get the guard from the mapped array result
     */
    /**
     * loop through the array to get the particular key as a string
     * set a var of guard outside the loop to null
     *  
     * loop through the authModels using the request 
     * then check with an if statement to know where the data coming from the request exixts() on the models of the array
     * then return the $guard = $key
     * 
     * Then use an if statement to check if the model is null or contains a value, if  its null send him back with error message,
     * but if it has the correct credentials pass it to the auth guard.
     */
    public function authenticate(StoreAuthRequest $request){
        
     $guard = $this->getKey($request);

     if ($guard === null)return back()->withErrors(['email' => 'Invalid credentials'], 'login')->onlyInput('email');

    auth()->guard($guard); 

        if (auth($guard)->attempt($request->all(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect(route($guard));
        }
        // dd(auth()->attempt($request->all(['email', 'password'])));
        return back()->withErrors(['email' => 'Invalid Credentials'], 'login')->onlyInput('email');
    }

    private function getKey($request){
        $guard = null;
        foreach ($this->authModels() as $key => $value) {
            if($value['class']::where('email', $request->email)->exists()){
                $guard = $key;
            }
            
        }
        return $guard;
    }

}

// $model = Arr::map($this->authModels(), function($value, $key) use($request) {
//     if($value['class']::where('email', $request->email)->exists()) {
//         return [
//         'guard' => $key, 
//         ];
//     }
// });

// if(!$model && count($model) < 1) return back()->withErrors(['email' => 'Invalid Credentials'], 'login')->onlyInput('email');
// $selectedModelKey = $this->getKey($model);
// $guard = array_keys($model)[$selectedModelKey];
