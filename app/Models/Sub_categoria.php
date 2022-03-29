<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_categoria extends Model
{
    use HasFactory;
    protected $table = "sub_categorias";
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
