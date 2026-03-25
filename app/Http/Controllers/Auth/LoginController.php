<?php
namespace App\Http\Controllers\Auth;

use App\Mail\LoginAlertMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // Send login alert email
        Mail::to($user->email)->send(new LoginAlertMail($user));

        return redirect()->intended($this->redirectTo);
    }
}