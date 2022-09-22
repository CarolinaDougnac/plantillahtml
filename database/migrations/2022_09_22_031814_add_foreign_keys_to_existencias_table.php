<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('existencias', function (Blueprint $table) {
            $table->foreign(['id_estado'], 'id_estado')->references(['id'])->on('estadoprods');
            $table->foreign(['id_producto'], 'id_producto')->references(['id'])->on('productos');
            $table->foreign(['id_factura'], 'id_factura')->references(['id'])->on('facturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('existencias', function (Blueprint $table) {
            $table->dropForeign('id_estado');
            $table->dropForeign('id_producto');
            $table->dropForeign('id_factura');
        });
    }
}
