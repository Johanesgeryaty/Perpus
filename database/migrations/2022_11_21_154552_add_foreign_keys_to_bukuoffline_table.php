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
        Schema::table('bukuoffline', function (Blueprint $table) {
            $table->foreign('genre_id', 'fk_bukuoffline_to_genre')->references('id')->on('genres')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bukuoffline', function (Blueprint $table) {
            Schema::dropIfExists('fk_bukuoffline_to_genre');
        });
    }
};
