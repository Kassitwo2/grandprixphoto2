<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



    
        // Handle login form submission
        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                // Authentication successful
                return redirect()->intended('/dashboard');
            }
    
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }



        public function show()
    {
        return view('livewire.add-jury');
    }

    public function userData()
    {
        return User::all();
    }
    

}
