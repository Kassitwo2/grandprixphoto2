<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Jury;
use Illuminate\Support\Facades\Hash;


class CreateJury extends Component
{
    public function render()
    {
        return view('livewire.add-jury');
    }
    
    public function save(){

        dd('endpoint hit');

    }
    public function rate($rating)
    {
        dd($rating);

    }



    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:juries,email',
        'password' => 'required|min:6',
    ]);

    // Create the jury member
    $jury = Jury::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
    ]);

    if ($request->ajax()) {
        // If it's an AJAX request, return a JSON response
        return response()->json(['message' => 'Jury member added successfully!', 'jury' => $jury], 201);
    } else {
        // If it's a regular HTTP request, redirect back with a success message
        return redirect()->back()->with('message', 'Jury member added successfully!');
    }
}

}
