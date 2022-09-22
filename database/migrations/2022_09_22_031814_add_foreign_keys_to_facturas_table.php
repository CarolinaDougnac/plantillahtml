<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facturas', function (Blueprint $table) {
            $table->foreign(['id_proveedor'], 'fk_Factura_Proveedor1')->references(['id'])->on('proveedores');
            $table->foreign(['estado_fact'], 'fk_estado_fact')->references(['id'])->on('estadofacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturas', function (Blueprint $table) {
            $table->dropForeign('fk_Factura_Proveedor1');
            $table->dropForeign('fk_estado_fact');
        });
    }
}
