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
        Schema::create('facturas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('folio')->nullable();
            $table->integer('id_proveedor')->index('fk_Factura_Proveedor1_idx');
            $table->integer('estado_fact')->index('fk_estado_fact_idx');
            $table->dateTime('fecha_emision');
            $table->dateTime('fecha_reception');
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
        Schema::dropIfExists('facturas');
    }
}
