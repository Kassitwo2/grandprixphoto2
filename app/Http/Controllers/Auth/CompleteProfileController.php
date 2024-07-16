<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Mail\emailRegister;
use Illuminate\Support\Facades\Mail;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CompleteProfileController extends Controller
{
    //

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        // Validate the request data
        $validatedData = $request->validate([
            'telephone' => 'required', // Add validation rule for telephone
            'sexe' => 'required', // Add validation rule for sexe
            'profile' => 'required', // Add validation rule for profile
            'ville' => 'required', // Add validation rule for ville
            'terms' =>'required',
            'date_naissance' => 'required',
            // Add more validation rules for other fields as needed
        ]);

        $phone = '+212 ' . $request->input('telephone');


        // Update user information
        $user->update([
            'phone' => $phone ,
            'sexe' => $request->input('sexe'),
            'profile' => $request->input('profile'),
            'ville_id' => $request->input('ville'),
            'DateNaissance' => $request->input('date_naissance'),
            'is_complete' => 1,
            // Add more fields to update if needed
        ]);



        //$user = Auth::user(); // Assuming you're using Laravel's built-in authentication
        //$dateNaissance = Carbon::parse($request->input('date_naissance'));
        //$age = $dateNaissance->diffInYears(Carbon::now());
    
    
        //if ($age >= 18) {
            //Mail::to(Auth::user()->email)->send(new emailRegister());


            // User is 18 years or older, redirect back
            return redirect('/dashboard')->with('success', 'Utilisateur mis à jour avec succès.');

        //} else {
            // User is under 18 years old, logout
           // Auth::logout();
            //session()->flash('error', 'Vous avez été déconnecté parce que vous avez moins de 18 ans.');
            //return redirect('/login');
        //}
    
        // Redirect or perform other logic after updating the user
    }
    

public function completeProfile(){
        
    $villes = Ville::orderBy('name')->get();

    return view('auth.complete-profile',
    [
        'villes' => $villes,
    ]);

}
}
