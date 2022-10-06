<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use App\SocialAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\URL;
use Session;

class SocialAuthController extends Controller
{

     
 
    public function __construct()
    {
        // return $this->middleware('auth');
        //$this->redirectTo = url()->previous();
        $this->middleware('guest')->except('logout');

    }
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callbackProvider($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
            
            /**
             * 
             * CREATE A SOCIL ACCOUNT FOR NEW USERS
             */
            // CREATING THE USER ACCOUNT
            // Find the user
            $user = User::where([
                'email' => $socialUser->getEmail()
            ])->first();
            
            // If user does not exist create a new account for them
            if ($user == false) {
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'avatar' => $socialUser->avatar_original,
                    'provider_name' => $provider,
                    'provider_id' => $socialUser->getId(),
                    'access_token' => $socialUser->token,
                ]);
            
            }
            // log the user in
            auth()->login($user, true);
            
            if (!Session::get('reviewURL')) 
                // redirect to session route
                return redirect()->intended('my-account');
            else
                return redirect()->intended( Session::get('reviewURL'));
                
                
            /**
             * 
             *  LOG THE USER IN WITH SOCIAL ACCOUNT
             */
            // chek if social account exit
            $account = User::where([
                'provider_name' => $provider,
                'provider_id' => $socialUser->getId(),
            ])->first();

            // if social account exist get the user and log them in
            if ($account) {
                // update the user acccount
                $account->update([
                    'avatar' => $socialUser->getAvatar(),
                    'provider_name' => $provider,
                    'provider_id' => $socialUser->getId(),
                    'access_token' => $socialUser->token,
                ]);
                
            }
            auth()->login($account, true);
            if (!Session::get('reviewURL')) 
                // redirect to session route
                return redirect()->intended('my-account');
            else
                return redirect()->intended( Session::get('reviewURL'));

        } catch (\Exception $e) {
            // return redirect()->route('login')->withErrors($e->getMessage());
            // return $e->getMessage();
            return 'something went wrong'.$e->getMessage();
        }
    }
}
