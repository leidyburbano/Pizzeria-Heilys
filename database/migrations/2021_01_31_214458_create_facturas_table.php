<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('Idfac');
            $table->date('Fechafac');                    
            $table->float('Totalfac'); 
            $table->string('id_usuario',15); 
            $table->string('id_cliente',15); 

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_cliente')->references('id')->on('cliente');
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
        Schema::dropIfExists('factura');
    }
}
