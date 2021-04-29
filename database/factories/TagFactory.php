<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $random = $this->faker->unique()->randomElement(['PHP', 'Java', 'Javascript', 'Node.js', 'React', 'Vue.js', 'MongoDB', 'MySQL', 'MariaDB','Laravel']);
        $slug = Str::slug($random);

        return [
            'tag' => $random,
            'slug' => $slug,
            'color' => $this->faker->randomElement(['red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink', 'orange', 'gray']),
        ];
    }
}
