<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){

    }

    public function store(Request $request){

        $request->validate([
           'name' => 'required',
            'email' => ' required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('contacto.libreriatehuacan@gmail.com')->subject('Sugerencia y/o queja')->from($request->input('email'))->send($correo);

        return redirect()->route('index')->with('info', 'Mensaje enviado');
    }
}
