<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemscatalogoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcatalogo', function (Blueprint $table) {
            $table->unsignedBigInteger('id_catalogo');
            $table->unsignedBigInteger('id_producto');

            $table->foreign('id_catalogo')->references('Idcat')->on('catalogo');
            $table->foreign('id_producto')->references('Idpro')->on('producto');

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
        Schema::dropIfExists('itemcatalogo');
    }
}
