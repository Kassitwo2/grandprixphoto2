<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

use Carbon\Carbon;

use File; 


class SocialiteController extends Controller
{
    // Google login
public function RedirectToGoogle()
{
    return Socialite::driver('google')->redirect();

/*     return Socialite::driver('google')
    ->scopes(['openid', 'profile', 'email', 'https://www.googleapis.com/auth/user.birthday.read'])
    ->redirect(); */   
}


// Google callback
public function handelGoogleCallback(){



    try {
        $user = Socialite::driver('google')->user();
    
        // Check if a user with the same email already exists
        $findUser = User::where('email', $user->email)->first();
    
        if ($findUser) {


            //$user = Auth::user(); // Assuming you're using Laravel's built-in authentication

        

                // If the user exists, log them in
                Auth::login($findUser);
                //return response()->json($findUser);
                //return redirect('/dashboard');
                return redirect('/dashboard')->with('success', 'Utilisateur mis à jour avec succès.');


        


        } else {
            // If the user does not exist, create a new user
            //$birthday = $user->offsetExists('birthday') ? Carbon::parse($user->user['birthday'])->format('Y-m-d') : null;
    
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'photo' => $user->getAvatar(),
                'social_id' => $user->getId(),
                'social_type' => 'google',
                'password' => Hash::make('my-google'),
                //'birthday' => $birthday,
            ]);
    
            Auth::login($newUser);
            return redirect('/complete-profile');
        }
    } catch (\Exception $e) {
        //dd($e->getMessage(), $e->getTrace());
        //return redirect()->back();
        return redirect('/complete-profile');

    }
    
}









// Facebook login
public function RedirectToFacebook(Request $request){
   
   return Socialite::driver('facebook')->redirect();
}

// Facebook callback
public function handelFacebookCallback(){



    try {
        $userSocial = Socialite::driver('facebook')->user();
    

        if(!$userSocial->email){

            //dd('email n exist pas');
           //session()->flash('success', );
            //return redirect()->back()->with('error', 'You have reached the limit of 10 participations.');
            session()->flash('error', "Ce compte ne contient aucun email! \n Merci de vous connecter avec un compte qui le contient \n هذا الحساب لا يحتوي على بريد إلكتروني! \n الرجاء تسجيل الدخول باستخدام حساب يحتوي على بريد إلكتروني");
            return redirect()->route('login')->with('error', "Ce compte ne contient aucun email! <br> Merci de vous connecter avec un compte qui le contient <br> هذا الحساب لا يحتوي على بريد إلكتروني! <br> الرجاء تسجيل الدخول باستخدام حساب يحتوي على بريد إلكتروني");

        }
        //dd($userSocial->name);
        // Check if a user with the same email already exists
        $user = User::where('email',$userSocial->email)->first();
    

        if ($user) {
            // If the user exists, log them in
            Auth::login($user);
            //return response()->json($findUser);
            return redirect('/dashboard');

        } else {
            // If the user does not exist, create a new user
            //$birthday = $user->offsetExists('birthday') ? Carbon::parse($user->user['birthday'])->format('Y-m-d') : null;
    
            $newUser = User::create([
                'name' => $userSocial->name,
                'email' => $userSocial->email,
                'photo' => $userSocial->getAvatar(),
                'social_id' => $userSocial->getId(),
                'social_type' => 'facebook',
                'password' => Hash::make('my-facebook'),
                //'birthday' => $birthday,
            ]);
    
            Auth::login($newUser);
            return redirect('/complete-profile');
        }
    } catch (\Exception $e) {
        //dd($e->getMessage(), $e->getTrace());

        return redirect('/complete-profile');
        //dd($e->getMessage(), $e->getTrace());
    }
}
}