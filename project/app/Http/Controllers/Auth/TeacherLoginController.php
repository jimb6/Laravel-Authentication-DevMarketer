<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:teacher');
    }

    public function showLoginForm(){
        return view('auth.teacher-login');
    }

    public function login(Request $request)
    {
        //Validate Data
        $this->validate($request, [
            'username' => 'required|min:3',
            'password' => 'required|min:6'
        ]);

        //Attempt to log user
        if (Auth::guard('teacher')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
            //if Successful, then redirect to its intended location
            return redirect()->intended(route('teacher.dashboard'));
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
    }
}
