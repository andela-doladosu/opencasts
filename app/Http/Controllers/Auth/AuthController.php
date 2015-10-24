<?php

namespace opencasts\Http\Controllers\Auth;

use opencasts\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use opencasts\Http\Controllers\Controller;
use Socialite;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/';
    
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    public function socialLogin()
    {
        $driver = trim($_SERVER['REQUEST_URI'], '/');
        return Socialite::driver($driver)->redirect();
    }


    public function handleProviderCallback()
    {
        $driver = explode('?', substr($_SERVER['REQUEST_URI'], 6))[0];

        try {
            $user = Socialite::driver($driver)->user();
        } catch (Exception $e) {
            return redirect('auth/'.$driver);
        }
 
        $authUser = $this->findOrCreateUser($user, $driver);
 
        Auth::login($authUser, true);
 
        return redirect($this->redirectPath());
    }
 
    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $socialUser
     * @return User
     */
    private function findOrCreateUser($socialUser, $driver)
    {   
        $authUser = User::where($driver.'_id', $socialUser->id)->first();
 
        if ($authUser){
            return $authUser;
        }
 
        return User::create([
            'username' => $socialUser->name,
            $driver.'_id' => $socialUser->id,
            'avatar' => $socialUser->avatar
        ]);
    }

    protected function login()
    {
        return view('login');
    }

    protected function createUser(Request $request)
    {
        $validate = $this->validator($request->all());
        $errors = $validate->errors()->getMessages();
        if ($errors){
            return redirect()->back()->withInput()->withErrors($errors);
        } else {
            Auth::login($this->create($request->all()));
            return redirect($this->redirectPath());
        }
    }

    protected function createSession(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);
        $field = (filter_var($credentials ['email'], FILTER_VALIDATE_EMAIL)) ? "email" : "username";
        
        if(Auth::attempt([
            $field => $credentials ['email'],
            'password' => $credentials ['password']
        ], $request->has('remember'))
        ) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        /*
         * If the login attempt was unsuccessful we will increment the number of attempts
         * to login and redirect the user back to the login form. Of course, when this
         * user surpasses their maximum number of attempts they will get locked out.
         */
        if($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect()->back()->withInput($request->only($this->loginUsername(), 'remember'))->withErrors([
            $this->loginUsername() => $this->getFailedLoginMessage()
        ]);
    }

    protected function register()
    {
        return view('register');
    }

    protected function logout()
    {   
        Auth::logout();
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
