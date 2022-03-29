<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoImagen extends Model
{
    use HasFactory;
    protected $table = "menu_imagenes";
    public function getImagenProductoAttribute(){
        $imagen = $this->imagen;
        if ($imagen){
            return '/img/productos/'.$imagen;
        }
    }
}
