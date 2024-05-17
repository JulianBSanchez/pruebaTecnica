<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'precio',
        'descripcion',
        'src',
        'categoria',
        'pedido'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

}
