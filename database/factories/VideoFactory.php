<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $number = 1;
        $users = User::pluck('id')->toArray();
        return [
            'nombre' =>  $this->faker->numerify('Video ####'),
            'decripcion' => $this->faker->sentence(),
            'url' => $this->faker->bothify(' ##??##??##??##??.mp4'),
            'id_usuario' => $this->faker->randomElement($users),
        ];
    }
}
