<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
    * Get the login username to be used by the controller.
    *
    * @return string
    */
    public function username()
    {
        return 'op';
    }

    /**
     * Validate the user login request.
     *
     * @param  App\Http\Controllers\Auth\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $messages = [
            'op.required' => 'Zadajte č. občianskeho preukazu.',
            'password.required' => 'Zadajte heslo',
        ];

        $request->validate([
            'op' => 'required|string',
            'password' => 'required|string',
        ], $messages);
    }
}
