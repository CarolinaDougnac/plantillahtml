<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('existencias', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_producto')->index('id_producto_idx');
            $table->integer('cantidad');
            $table->integer('id_estado')->index('id_estado_idx');
            $table->dateTime('vencimiento');
            $table->integer('id_factura')->nullable()->index('id_factura_idx');
            $table->integer('precio_venta')->nullable();
            $table->integer('precio_balance')->nullable();
            $table->integer('cant_tienda')->nullable();
            $table->integer('cant_bodega')->nullable();
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
        Schema::dropIfExists('existencias');
    }
}
