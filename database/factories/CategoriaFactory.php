<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $random = $this->faker->unique()->randomElement(['Desarollo web', 'Diseño Web']);
        $slug = Str::slug($random);

        return [
            'nombre' => $random,
            'slug' => $slug,
        ];
    }
}