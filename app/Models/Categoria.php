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
        'parent_id'
    ];

    public function productos()
    {
        return $this->hasmany(Producto::class);
    }

    public function parent()
    {
        return $this->belongsTo('Categoria', 'parent_id');
    }

    public function children(){
        return $this->hasMany('Categoria'. 'parent_id');
    }

}