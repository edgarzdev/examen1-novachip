<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'imagen',
        'disponible',
        'marca_id',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
