<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsfacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemfactura', function (Blueprint $table) {
            $table->unsignedBigInteger('id_factura');
            $table->unsignedBigInteger('id_producto');
            $table->string('cantidad',15);
            $table->string('subtotal',15);

            $table->foreign('id_producto')->references('Idpro')->on('producto');
            $table->foreign('id_factura')->references('Idfac')->on('factura');
            
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
        Schema::dropIfExists('itemfactura');
    }
}
