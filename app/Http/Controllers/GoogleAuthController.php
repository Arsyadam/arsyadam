<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Schema;
use Intervention\Image\Facades\Image;


class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        try {
            $google_user = Socialite::driver('google')->stateless()->user();
            $user = User::where('google_id', $google_user->getId())->first();
            $email = User::where('email', $google_user->getEmail())->first();
            
                if ($user) {
                        // logic : kalo email login gaada google id maka abort
                        Auth::login($user);
                        
                        return redirect()->intended('/');
                      

                    }else {
                        
                          # code...
                          $new_user = new User;
                          $new_user->name = $google_user->getName();
                          $new_user->email = $google_user->getEmail();
                          $new_user->google_id = $google_user->getId();
                          $new_user->profile_photo_path = $google_user->getAvatar();
                          $new_user->email_verified_at = now();         
                          $new_user->save();
  
  
  
                          Auth::login($new_user);
  
                          return redirect()->intended('/');
                    }
            } catch (\Throwable $th) {
                return redirect()->intended('login')->with('errorGoogle',"Your email was registered login by email, you can't login with google");
                
        }

    }
}
