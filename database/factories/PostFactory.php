<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;
    protected $count;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {

        static $number = 1;
        $users = User::pluck('id')->toArray();
        $categorias = Categoria::pluck('id_categoria')->toArray();
        $nombre = 'Post '.$number;
        $slug =  Str::slug($nombre);
        return [
            'nombre' => $nombre,
            'slug' => $slug,
            'extracto' => $this->faker->sentence,
            'cuerpo' => $this->faker->paragraphs(3, true),
            'estado' => $this->faker->randomElement([1, 2]),
            'id_usuario' => $this->faker->randomElement($users),
            'id_categoria' => $this->faker->randomElement($categorias),
        ];
    }
}
