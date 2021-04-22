<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Perfil;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('imagenes');
        Storage::makeDirectory('imagenes');

        $this->call(UserSeeder::class);
        Perfil::factory(2)->create();
        Tag::factory(10)->create();
        Categoria::factory(2)->create();
        $this->call(PostSeeder::class);
        Video::factory(10)->create();


    }
}
