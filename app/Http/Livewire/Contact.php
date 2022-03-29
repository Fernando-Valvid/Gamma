<?php

namespace App\Http\Livewire;

// Componente Livewire para el formulario de contáctenos

use App\Models\Contact as Contactos;
use App\Models\Informacion_contacto as Informacion;
use Livewire\Component;


class Contact extends Component
{
    

    public function render()
    {
        $informacion = Informacion::all();
        return view('livewire.contact')->with(compact('informacion'));
    }

    public function edit()
    {
        
        return view('admin.informacion.edit');
    }
}
