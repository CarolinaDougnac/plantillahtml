<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tiendas', function (Blueprint $table) {
            $table->foreign(['id_mueble'], 'id_mueble')->references(['id'])->on('muebles');
            $table->foreign(['id_posicion'], 'id_posicion')->references(['id'])->on('posiciones');
            $table->foreign(['id_nivel'], 'id_nivel')->references(['id'])->on('niveles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tiendas', function (Blueprint $table) {
            $table->dropForeign('id_mueble');
            $table->dropForeign('id_posicion');
            $table->dropForeign('id_nivel');
        });
    }
}
