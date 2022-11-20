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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            //Relaciones
            $table->unsignedBigInteger('id_bodega')->nullable();
            $table->foreign('id_bodega')->references('id')->on('bodegas');
            
            $table->string('cantidad')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

            

            /* $table->unsignedBigInteger('id_producto')->nullable();
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade'); */

            

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
        Schema::dropIfExists('inventarios');
    }
};
