<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Clasificacion;
use App\Models\Menu;
use App\Models\Producto;
use App\Models\ProductoImagen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as ImageIntervention;
use File;

class ProductoController extends Controller
{

    public function index()
    {
        //Laravel Eloquent es un motor "orm" permite manejar base de datos en objeto, entidades, etc.
        $productos = Menu::all();
        return view("admin.productos.show")->with(compact("productos"));
    }
    public function create()
    {
        $clasificaciones = Menu::all();
        return view("admin.productos.create")->with(compact("clasificaciones"));
    }

    //Guardar el producto en la base de datos
    public function store(Request $request)
    {
        
        $validated=$request->validate([
            'nombre'          => 'nullable|unique:menus|max:40',
            'introduccion'    => 'nullable|max:10000',
            'imagen'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:2048',
            'imagenDesc'      => 'nullable',
            'descripcion'     => 'nullable|max:10000',
            'contenido'       => 'nullable|max:10000',
            'diferenciadores' => 'nullable|max:10000',
            'imagen2'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:2048',
            'imagen2Desc'     => 'nullable',
            'preguntas'       => 'nullable',
            'respuestas'      => 'nullable',
            'imagenLogo'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:2048',
            'imagenLogoDesc'  => 'nullable',
            'status'          => 'nullable',
            'carac_adi'       => 'nullable|max:10000',
            'info_adi'        => 'nullable|max:10000',
        ]);


        $preguntas = json_encode($request->preguntas);
        $respuestas = json_encode($request->respuestas);

        $producto = new Menu();
        $producto->nombre = $request->nombre;
        $producto->introduccion = $request->introduccion;
        $producto->descripcion = $request->descripcion;
        $producto->contenido = $request->contenido;
        $producto->preguntas = $preguntas;
        $producto->respuestas = $respuestas;
        $producto->diferenciadores = $request->diferenciadores;
        $producto->status = $request->status;
        $producto->carac_adi = $request->carac_adi;
        $producto->info_adi = $request->info_adi;
        $producto->imagenDesc = $request->imagenDesc;
        $producto->imagen2Desc = $request->imagen2Desc;
        $producto->imagenLogoDesc = $request->imagenLogoDesc;
        $producto->padre_id = $request->clasificacion;
        $producto->slug = Str::slug($request->nombre);

//Intervención Imagen 1
        if ($request->imagen) {
            $image = $request->imagen;
            $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';
            $imageResize = ImageIntervention::make($image)
                ->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });
            $simplePath = 'img/productos';
            $path = 'img/productos/' . $imageName;
            if ($imageResize->save($path, 100, 'webp')) {
                $producto->imagen = $imageName;
            }
        }

//Intervención Imagen 2
        if ($request->imagen2) {
            $image = $request->imagen2;
            $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';
            $imageResize = ImageIntervention::make($image)
                ->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });
            $simplePath = 'img/productos';
            $path = 'img/productos/' . $imageName;
            if ($imageResize->save($path, 100, 'webp')) {
                $producto->imagen2 = $imageName;
            }
        }

//Intervención Imagen Logo
        if ($request->imagenLogo) {
            $image = $request->imagenLogo;
            $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';
            $imageResize = ImageIntervention::make($image)
                ->resize(80, 190, function ($constraint) {
                    $constraint->aspectRatio();
                });
            $simplePath = 'img/productos';
            $path = 'img/productos/' . $imageName;
            if ($imageResize->save($path, 100, 'webp')) {
                $producto->imagenLogo = $imageName;
            }
        }

        $producto->save();

//Imagenes del carrusel de la pagina.
        if ($request->file('imagenes')) {
            foreach ($request->file('imagenes') as $image){
            $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';

//Intervention Image
            $imageResize = ImageIntervention::make($image)
                ->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });
            $simplePath = 'img/productos';
            $path = 'img/productos/' . $imageName;
            if ($imageResize->save($path, 100, 'webp')) {
                $productoImagen = new ProductoImagen();
                $productoImagen->imagen = $imageName;
                $productoImagen->menu_id = $producto->id;
                $productoImagen->save();
            }
        }
        }

//Imagen que va en el carrusel de la pagina de inicio.
        if ($request->file('bienvenida')) {
            $image = $request->bienvenida;
            $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';

//Intervention Image
            $imageResize = ImageIntervention::make($image)
                ->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });
            $simplePath = 'img/productos';
            $path = 'img/productos/' . $imageName;
            if ($imageResize->save($path, 100, 'webp')) {
                $productoImagen = new ProductoImagen();
                $productoImagen->imagen = $imageName;
                $productoImagen->menu_id = $producto->id;
                $productoImagen->carrusel = true;
                $productoImagen->save();
            }
        }
        $guardado = "El producto a sido guardado correctamente";
        return (redirect('admin/productos')->with(compact('guardado')));
    }
    //Mostrar cada uno de los productos
    public function show($id)
    {

    }


    //Mostrar el formulario para editar los productos
    public function edit($id)
    {
        $producto = Menu::find($id);
        $clasificaciones = Menu::all();
        $imagenDestacada = ProductoImagen::where('destacado', true)->where('menu_id', $id)->get();
        $imagenDestacada = $imagenDestacada->count() > 0;
        // return $producto;
        return view("admin.productos.edit")->with(compact("producto","clasificaciones", "imagenDestacada"));
    }


    //Actualizar los productos
    public function update(Request $request, $id)
    {
        // return $request;
        $preguntas = json_encode($request->preguntas);
        $respuestas = json_encode($request->respuestas);

        $producto = Menu::find($id);
        $producto->nombre = $request->nombre;
        $producto->introduccion = $request->introduccion;
        $producto->descripcion = $request->descripcion;
        $producto->contenido = $request->contenido;
        $producto->preguntas = $preguntas;
        $producto->respuestas = $respuestas;
        $producto->diferenciadores = $request->diferenciadores;
        $producto->status = $request->status;
        $producto->carac_adi = $request->carac_adi;
        $producto->info_adi = $request->info_adi;
        $producto->imagenDesc = $request->imagenDesc;
        $producto->imagen2Desc = $request->imagen2Desc;
        $producto->imagenLogoDesc = $request->imagenLogoDesc;
        $producto->padre_id = $request->clasificacion;
        $producto->slug = Str::slug($request->nombre);



        $simplePath = 'img/productos';
//Intervención Imagen1
        if ($request->imagen) {
            if ($producto->imagen){
                File::delete($simplePath.$producto->imagen);
            }
            $image = $request->imagen;
            $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';

            $imageResize = ImageIntervention::make($image)
                ->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });

            $path = 'img/productos/' . $imageName;
            if ($imageResize->save($path, 100, 'webp')) {
                $producto->imagen = $imageName;
            }
        }
//Intervención Imagen2
        if ($request->imagen2) {
            if ($producto->imagen2){
                File::delete($simplePath.$producto->imagen2);
            }
            $image = $request->imagen2;
            $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';

            $imageResize = ImageIntervention::make($image)
                ->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });

            $path = 'img/productos/' . $imageName;
            if ($imageResize->save($path, 100, 'webp')) {
                $producto->imagen2 = $imageName;
            }
        }

//Intervención ImagenLogo
        if ($request->imagenLogo) {
            $image = $request->imagenLogo;
            $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';
            $imageResize = ImageIntervention::make($image)
                ->resize(170, 170, function ($constraint) {
                    $constraint->aspectRatio();
                });
            $simplePath = 'img/productos';
            $path = 'img/productos/' . $imageName;
            if ($imageResize->save($path, 100, 'webp')) {
                $producto->imagenLogo = $imageName;
            }
        }


        $producto->save();
        
//Intervención Imagenes carrusel
        if ($request->file('imagenes')) {
            $simplePath = 'img/productos';
            foreach ($producto->imagenes as $imagen){
                File::delete($simplePath.$imagen);
            }
            $producto->imagenes()->delete();
            foreach ($request->file('imagenes') as $image){
                $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';

                $imageResize = ImageIntervention::make($image)
                    ->resize(500, 500, function ($constraint) {
                        $constraint->aspectRatio();
                    });

                $path = 'img/productos/' . $imageName;
                if ($imageResize->save($path, 100, 'webp')) {
                    $productoImagen = new ProductoImagen();
                    $productoImagen->imagen = $imageName;
                    $productoImagen->menu_id = $producto->id;
                    $productoImagen->save();
                }

            }
        }

        if ($request->bienvenida) {
            $bienvenida = ProductoImagen::where('menu_id', $producto->id)->first();
            if ($bienvenida){
                File::delete($simplePath.$bienvenida->imagen);
                $bienvenida->delete();
            }
            $image = $request->bienvenida;
            $imageName = uniqid() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME), '-') . '.webp';

//Intervention Image
            $imageResize = ImageIntervention::make($image)
                ->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });

            $path = 'img/productos/' . $imageName;
            if ($imageResize->save($path, 100, 'webp')) {
                $bienvenida = new ProductoImagen();
                $bienvenida->imagen = $imageName;
                $bienvenida->menu_id = $producto->id;
                $bienvenida->save();
            }
        }


        $guardado = "El producto a sido modificado correctamente";
        return (redirect('admin/productos')->with(compact('guardado')));
    }

    //Eliminar el producto
    public function destroy($id)
    {
        $producto = Menu::find($id);
        $producto->imagenes()->delete();
        $producto->delete();
    }

    // Manejo de metadatos de cada producto
    public function indexMeta(){
        $productos = Menu::all();
        return view("admin.metadatos.show")->with(compact("productos"));
    }

    public function editMeta($id){
        $metadatos = Menu::find($id);
        // return $metadatos;
        return view("admin.metadatos.edit")->with(compact("metadatos"));
    }

    public function updateMeta(Request $request, $id){
        $metadatos = Menu::find($id);
        $metadatos->product_meta_title       = $request->meta_title;
        $metadatos->product_meta_description = $request->meta_description;
        $metadatos->product_meta_keywords    = $request->meta_keywords;
        $metadatos->save();
        // return $request;
        $guardado = "El producto a sido modificado correctamente";
        return (redirect('admin/metadatos')->with(compact('guardado')));
    }
}
