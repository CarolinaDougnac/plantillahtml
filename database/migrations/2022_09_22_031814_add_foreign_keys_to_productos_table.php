<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->foreign(['id_bodega'], 'id_bodega')->references(['id'])->on('bodegas');
            $table->foreign(['id_tienda'], 'id_tienda')->references(['id'])->on('tiendas');
            $table->foreign(['id_marca'], 'id_marca')->references(['id'])->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('id_bodega');
            $table->dropForeign('id_tienda');
            $table->dropForeign('id_marca');
        });
    }
}
