<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



    public function savePresenceFormation(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            //'DateFormation' => 'required',
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'telephone' => 'required|string',
            'EMAIL' => 'required|string|email',
            'genre' => 'required|string|in:femme,homme',
        ]);

        // Create a new instance of your FormData model
        $presence = new Presence();

        // Assign the form fields to the model attributes


        $phone = '+212 ' . $request->telephone;
        $presence->DateFormation = '25/05/2024';
        $presence->prenom = $request->prenom;
        $presence->nom = $request->nom;
        $presence->telephone = $phone;
        $presence->EMAIL = $request->EMAIL;
        $presence->genre = $request->genre;

        // Save the form data into the database
        $presence->save();

        // Optionally, you can return a response indicating success
        return response()->json(['success' => true]);
    }
}
