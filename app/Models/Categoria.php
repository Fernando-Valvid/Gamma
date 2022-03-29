<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = "categorias";
    public function sub_categorias(){
        return $this->hasMany(sub_categoria::class);
    }
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
