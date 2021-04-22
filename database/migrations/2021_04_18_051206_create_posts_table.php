<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id_post');
            $table->string('nombre');
            $table->string('slug');
            $table->text('extracto');
            $table->longText('cuerpo');
            $table->enum('estado', [1,2])->default(1);
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->unsignedBigInteger('id_categoria')->nullable();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
            $table->foreign('id_categoria')
                ->references('id_categoria')
                ->on('categorias')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
