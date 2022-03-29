<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Se añade el modelo de contacto para guardar en base de datos
use App\Models\Contact as Contactos;

class SendEmailController extends Controller
{
    function index()
    {

    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required',
            'phone' => 'required',
            'asunto' => 'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'asunto'    => $request->asunto

        );

        Contactos::create([
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'asunto'    => $request->asunto
        ]);

        Mail::to('fernando.cortes971@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');

    }
}
