<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Resources\UserResourse;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
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
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    public function handleProviderCallback()
    {
       $user = Socialite::driver('github')->user();
       $token = $user->token;
        $userGet = Socialite::driver('github')->userFromToken($token);

        dd($userGet);
        $createdUser= User::create($user->all());
        //return $createdUser;
        return redirect(route('posts.index'));         // $user->token;
    }
}
