<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacion_contacto extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone',
        'email',
        'whatsapp',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
    ];

    // protected $guarded = [];
}
