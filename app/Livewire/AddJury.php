<?php

namespace App\Livewire;

use App\Models\Jury;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AddJury extends Component
{



    public $id, $name, $email, $password;



    // Specify the layout for this component
    protected $layout = 'components.layouts.app';
    public function render()
    {
        ///$jurys = User::all();
        return view('livewire.add-jury');
    }




    public function store()
    {


        // Create the jury member
        Jury::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Reset input fields after submission
        $this->reset();


        // Optionally, you can add a success message
        session()->flash('message', 'Jury member added successfully!');
    }

}
