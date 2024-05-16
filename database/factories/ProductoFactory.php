<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'codigo' => Str::ramdon(25),
            'nombre' => fake()->name,
            'precio' => fake()->numberBetween(1,100),
            'descripcion' => fake()->paragraph(3),
            'foto' => fake() ->imageUrl(with:620, height:480),
            'categoria' =>fake()->Categoria(),
        ];
    }
}
