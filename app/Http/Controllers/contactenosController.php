<?php

namespace App\Http\Controllers;

use App\Mail\messageRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactenosController extends Controller
{
    public function store(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'content' => 'required|min:3'
        ]);
        Mail::to('maicolalexis222@gmail.com')->send(new messageRecibido);
        return 'datos validos';
    }
}
