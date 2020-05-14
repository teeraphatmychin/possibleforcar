<?php

namespace App\Http\Controllers\Auth;
use Socialite;
use App\User;
use App\SocialAccount;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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
        //$this->middleware('admin')->except(['index']);
    }


    public function redirectToProvider($provider = 'facebook')
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider = 'facebook')
    {
        $providerUser = Socialite::driver($provider)->user();
            
        $user = $this->createOrGetUser($provider, $providerUser);
        auth()->login($user);

        return redirect()->to('/home');
    }

    public function createOrGetUser($provider, $providerUser)
    {
        /** Get Social Account */
        $account = SocialAccount::whereProvider($provider)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            /** Get user detail */
            $userDetail = Socialite::driver($provider)->userFromToken($providerUser->token);

            /** Create new account */
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $provider,
            ]);

            /** Get email or not */
            $email = !empty($providerUser->getEmail()) ? $providerUser->getEmail() : $providerUser->getId() . '@' . $provider . '.com';

            /** Get User Auth */
            if (auth()->check()) {
                $user = auth()->user();
            }else{
                $user = User::whereEmail($email)->first();
            }

            if (!$user) {
                /** Get Avatar */
                $image = $provider . "_" . $providerUser->getId() . ".png";
                $imagePath = public_path(config('app.media.directory') . "users/avatar/" . $image);
                file_put_contents($imagePath, file_get_contents($providerUser->getAvatar()));


                /** Create User */
                $user = User::create([
                    'email' => $email,
                    'name' => $providerUser->getName(),
                    'username' => $providerUser->getId(),
                    'avatar' => $image,
                    'password' => bcrypt(rand(1000, 9999)),
                ]);

            }

            /** Attach User & Social Account */
            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}
