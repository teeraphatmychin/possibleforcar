<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Socialite;
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

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
   
    public function handleProviderCallback($provider)
    {
        try {
  
            $socialUser = Socialite::driver($provider)->user();
     
        }
        catch(\Exception $e)
        {
            return redirect('/');
        }
        //check if we have logged provider
        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first();
        if(!$socialProvider){
            $user =User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                ['name'=> $socialUser->getName()]
            );
            $user->$socialProviders()->create(
                ['provider_id'=> $socialUser->getId,'provider'=>$provider]
            );
        }

        else
            $user = $socialProvider->user;
            auth()->login($user);
        return rediect('/home');
    }
            
    ////end google
    ////social login
        
    ////end social login
   
}
