<?php

namespace App\Http\Controllers;

use App\Mail\emailRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ApiEmailController extends Controller
{
    //


    public function send(){

        Mail::to(Auth::user()->email)->send(new emailRegister());
        return $this->sendResponse("Email Sent");
    }
}
