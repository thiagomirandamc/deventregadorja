<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaidassestoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saidassestoques', function (Blueprint $table) {
            $table->id();
            $table->string('idprodutosaida');
            $table->string('idestoque');
            $table->string('quantidadesaida');
            $table->string('valor');
            $table->string('idusuario');
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
        Schema::dropIfExists('saidassestoques');
    }
}
