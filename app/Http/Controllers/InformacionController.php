<?php

namespace App\Http\Controllers;

// Controlador para el manejo de la información de contacto (telefono, redes sociales, dirección, etc.)

use Illuminate\Http\Request;
use App\Models\Informacion_contacto as Informacion;

class InformacionController extends Controller
{

    public function index()
    {
        $datos = Informacion_contacto::all();
        return view('admin.informacion.show')->with(compact('datos'));
    }

    public function create()
    {
        $datos = Informacion::all();
        return view('admin.informacion.show')->with(compact('datos'));
    }

    //Guardar la informacion en la base de datos
    public function store(Request $request)
    {
        // return $request;
        try {
            
            $validated=$request->validate([
                'Address'   => 'required|min:10',
                'Phone'     => 'required|min:10',
                'Email'     => 'required|email',
                'Whatsapp'  => 'required',
                'Facebook'  => 'required',
                'Instagram' => 'required',
                'Linkedin'  => 'required',
            ]);
    
            //Si el ID 1 existe actualiza la informacion y sino lo crea
            $user = informacion::where('id', '=', 1)->first();
            if ($user !== null) {
                $update = informacion::find(1);
                $update->address = $request->Address;
                $update->phone = $request->Phone;
                $update->email = $request->Email;
                $update->whatsapp = $request->Whatsapp;
                $update->facebook = "www.facebook.com/".$request->Facebook;
                $update->instagram = "www.instagram.com/".$request->Instagram;
                $update->twitter = "www.twitter.com/".$request->Twitter;
                $update->linkedin = "www.linkedin.com/company".$request->Linkedin;
                $update->save();
                
                $guardado = "La información se actualizo correctamente";
            }
            else {
                $info = new Informacion();
                $info->address  = $request->Address;
                $info->phone    = $request->Phone;
                $info->email = $request->Email;
                $info->whatsapp = $request->Whatsapp;
                $info->facebook = "www.facebook.com/".$request->Facebook;
                $info->instagram = "www.instagram.com/".$request->Instagram;
                $info->twitter = "www.twitter.com/".$request->Twitter;
                $info->linkedin = "www.linkedin.com/company".$request->Linkedin;
                $info->save();
                $guardado = "La información se guardo correctamente";
            }
    
            return (redirect('admin/informacion')->with(compact('guardado')));
        } catch (Exception $e) {                  
            $fallo = "Error al guardar la información";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
