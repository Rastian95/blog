<?php

namespace Database\Factories;

use App\Models\Perfil;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Perfil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->firstName,
            'biografia' => $this->faker->sentence,
            'sitio_web' => $this->faker->domainName,
            'id_usuario' => $this->faker->unique()->numberBetween(1, User::count()),
        ];
    }
}
