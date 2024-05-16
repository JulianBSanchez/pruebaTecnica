<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'producto',
        'subcategorias'
    ];

    public function productos()
    {
        return $this->hasmany(Producto::class);
    }

    protected $casts =[
        'subcategorias' => 'array'
    ];
}
