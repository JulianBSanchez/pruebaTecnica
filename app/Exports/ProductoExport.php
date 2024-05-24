<?php

namespace App\Exports;

use App\Models\Producto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'id',
            'categoria_id',
            'pedido_id',
            'codigo',
            'nombre',
            'precio',
            'descripcion',
            'src',

        ];
    }
    public function collection()
    {
         return Producto::all();
    }
}