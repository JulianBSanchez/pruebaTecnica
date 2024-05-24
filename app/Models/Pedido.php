<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'unidades',
        'coste',
        'recordatorio',
    ];



    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }
}
