<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductoImagen as Imagen;
use App\Models\Menu;

class CarruselInicio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Laravel Eloquent es un motor "orm" permite manejar base de datos en objeto, entidades, etc.
        // $productos = Menu::all();
        // $servicios = Imagen::all()->union($productos);
        $servicios = DB::table('menus as m')
                        ->join('menu_imagenes as mi', 'mi.menu_id', '=', 'm.id')
                        ->select('mi.*', 'm.id', 'm.nombre', 'm.status')
                        ->get();
        // return $servicios;
        return view("admin.carrusel.show")->with(compact("servicios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        
        $destacados = $request->destacados;
        Imagen::where('destacado', true)
        ->update(['destacado' => false]);
        
        if ($destacados != null) {
            foreach ($destacados as $destacado){

                $imagen = Imagen::where('menu_id', $destacado)
                            ->update(['destacado' => true]);

            }
        }
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
