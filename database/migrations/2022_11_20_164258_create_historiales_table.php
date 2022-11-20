<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiales', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad')->nullable();
            //Relaciones
            $table->unsignedBigInteger('id_bodega_origen')->nullable();
            $table->foreign('id_bodega_origen')->references('id')->on('bodegas')->onDelete('cascade');

            $table->unsignedBigInteger('id_bodega_destino')->nullable();
            $table->foreign('id_bodega_destino')->references('id')->on('bodegas')->onDelete('cascade');

            
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            

           /*  $table->unsignedBigInteger('id_inventario')->nullable();
            $table->foreign('id_inventario')->references('id')->on('inventarios')->onDelete('cascade'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historiales');
    }
};
