<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'codigo' => $this->codigo,
            'nommbre'=> $this->nombre,
            'descripcion' => $this->descripcion,
            'producto' => $this->producto,
            'subcategorias' => $this->categorias
        ];
    }
}
