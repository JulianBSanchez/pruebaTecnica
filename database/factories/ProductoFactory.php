<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $categoria =  Categoria::all();
        return [
            'codigo'       => Str::random(25),
            'categoria_id' => fake()->numberBetween(1,4),
            'nombre'       => fake()->name(),
            'precio'       => fake()->numberBetween(1,500),
            'descripcion'  => fake()->paragraph(3),
            'src'          => fake()->imageUrl(),
        ];
    }
}
