<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_imagenes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('imagen');
            $table->boolean('destacado')->default(false);
            $table->boolean('carrusel')->default(false);

            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_imagenes', function (Blueprint $table) {
        $table->dropForeign('menu_imagenes_menu_id_foreign');
    });
        Schema::dropIfExists('menu_imagenes');
    }
}
