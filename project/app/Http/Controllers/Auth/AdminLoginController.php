<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        //Validate Data
            $this->validate($request, [
                'username' => 'required|min:3',
                'password'=>'required|min:5'
            ]);

            //Attempt to log user
            if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)){
                //if Successful, then redirect to its intended location
                return redirect()->intended(route('admin.dashboard'));
            }

        return redirect()->back()->withInput($request->only('username', 'remember'));
    }
}
