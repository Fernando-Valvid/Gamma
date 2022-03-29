<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = "productos";
    public function clasificacion(){
        return $this->belongsTo(Clasificacion::class);
    }
    public function categorias(){
        return $this->hasMany(Categoria::class);
    }
}
