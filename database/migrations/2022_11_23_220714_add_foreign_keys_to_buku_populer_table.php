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
        Schema::table('buku_populer', function (Blueprint $table) {
            $table->foreign('buku_online_id', 'fk_buku_populer_to_buku_online')->references('id')->on('buku_online')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id', 'fk_buku_populer_to_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buku_populer', function (Blueprint $table) {
            $table->dropForeign('fk_buku_populer_to_buku_online');
            $table->dropForeign('fk_buku_populer_to_user');
        });
    }
};
