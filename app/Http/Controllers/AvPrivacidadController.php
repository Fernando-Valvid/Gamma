<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvPrivacidad as Privacidad;


class AvPrivacidadController extends Controller
{
    // CONTROLADOR CREADO PARA PODER CREAR, MODIFICAR Y MOSTRAR EL AVISO DE PRIVACIDAD DE GEPIXYS

    public function index()
    {
        $aviso = Privacidad::find(1);
        
        return view("admin.avprivacidad.watch")->with(compact("aviso"));
    }
    
    
    public function create()
    {
        $data = Privacidad::find(1);
        
        return view("admin.avprivacidad.show")->with(compact('data'));
    }

    
    public function store(Request $request)
    {
        // return $request;
        $validated=$request->validate([
            'AvisoPriv'     => 'required|min:100',
        ]);

        $user = Privacidad::where('id', '=', 1)->first();
            if ($user !== null) {
                $update = Privacidad::find(1);
                $update->contenido = $request->AvisoPriv;
                $update->save();
                
                $guardado = "El aviso de privacidad se actualizo correctamente";
            }
            else {
                $info = new Privacidad();
                $info->contenido = $request->AvisoPriv;
                $info->save();
                $guardado = "El aviso de privacidad se guardo correctamente";
            }
            return (redirect('admin/aviso-privacidad')->with(compact('guardado')));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AvPrivacidad  $avPrivacidad
     * @return \Illuminate\Http\Response
     */
    public function show(AvPrivacidad $avPrivacidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AvPrivacidad  $avPrivacidad
     * @return \Illuminate\Http\Response
     */
    public function edit(AvPrivacidad $avPrivacidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AvPrivacidad  $avPrivacidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AvPrivacidad $avPrivacidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AvPrivacidad  $avPrivacidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(AvPrivacidad $avPrivacidad)
    {
        //
    }
}
