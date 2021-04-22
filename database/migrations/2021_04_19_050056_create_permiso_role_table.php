<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_permiso');
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_permiso')
                ->references('id_permiso')
                ->on('permisos')
                ->onDelete('cascade');
            $table->foreign('id_rol')
                ->references('id_rol')
                ->on('roles')
                ->onDelete('cascade');
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
        Schema::dropIfExists('permiso_role');
    }
}
