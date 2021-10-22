<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasestoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradasestoques', function (Blueprint $table) {
            $table->id();
            $table->string('idprodutoentrada');
            $table->string('idestoque');
            $table->string('quantidadeentrada');
            $table->string('custo');
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
        Schema::dropIfExists('entradasestoques');
    }
}
