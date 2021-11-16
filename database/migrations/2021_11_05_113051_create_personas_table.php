<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 50);
            $table->string('Primer apellido', 50);
            $table->string('Segundo apellido', 50);
            $table->date('Fecha de nacimiento');
            $table->unsignedBigInteger('padre');
            $table->foreign('padre')->references('id')->on('personas');
            $table->unsignedBigInteger('madre');
            $table->foreign('madre')->references('id')->on('personas');
            $table->timestamps();
            $table->foreignId('domicilios_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personas', function (Blueprint $table)
        {
            $table->dropColumn(['padre', 'madre']);
        });
    }
}
