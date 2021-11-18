<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePersonasTableChangeNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personas', function (Blueprint $table)
        {
            $table->dropColumn(['Primer apellido', 'Segundo apellido', 'Fecha de nacimiento']);
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('fecha_nacimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
