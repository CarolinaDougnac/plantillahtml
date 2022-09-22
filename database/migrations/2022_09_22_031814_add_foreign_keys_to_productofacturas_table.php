<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductofacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productofacturas', function (Blueprint $table) {
            $table->foreign(['Factura_id_factura'], 'fk_ProductoBasico_has_Factura_Factura1')->references(['id'])->on('facturas');
            $table->foreign(['ProductoBasico_id_productoBasico'], 'fk_ProductoBasico_has_Factura_ProductoBasico1')->references(['id'])->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productofacturas', function (Blueprint $table) {
            $table->dropForeign('fk_ProductoBasico_has_Factura_Factura1');
            $table->dropForeign('fk_ProductoBasico_has_Factura_ProductoBasico1');
        });
    }
}
