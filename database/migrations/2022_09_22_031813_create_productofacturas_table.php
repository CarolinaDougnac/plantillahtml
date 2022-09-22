<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductofacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productofacturas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ProductoBasico_id_productoBasico')->index('fk_ProductoBasico_has_Factura_ProductoBasico1_idx');
            $table->integer('Factura_id_factura')->index('fk_ProductoBasico_has_Factura_Factura1_idx');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productofacturas');
    }
}
