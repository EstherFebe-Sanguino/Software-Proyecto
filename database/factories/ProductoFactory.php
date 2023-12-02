<?php

namespace Database\Factories;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model = Producto::class;

    public function definition(): array
    {
        return [
            'nombreproducto' => $this->faker->word,
            'descripcion' => $this->faker->paragraph,
            'precio' => $this->faker->randomFloat(2, 1, 100),
        
        ];
    }
}
