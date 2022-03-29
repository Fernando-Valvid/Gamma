<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionContactosTable extends Migration
{
    /**
     * En esta tabla se guarda la informacion de contacto de Gepyxis
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_contactos', function (Blueprint $table) {
            $table->id();

            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('linkedin');

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
        Schema::dropIfExists('informacion_contactos');
    }
}
