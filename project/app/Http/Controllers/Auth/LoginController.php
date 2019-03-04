<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

//    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/student/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except'=>['logout', 'userLogout']]);
    }

    public function showLoginForm(){
        return view('auth.student-login');
    }

    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect(route('student.login'));
    }

    public function userLogin(Request $request){
        //Validate Data
        $this->validate($request, [
            'username' => 'required|min:3',
            'password'=>'required|min:5'
        ]);

        //Attempt to log user
        if(Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)){
            //if Successful, then redirect to its intended location
            return redirect()->intended(route('student.dashboard'));
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
    }
}
