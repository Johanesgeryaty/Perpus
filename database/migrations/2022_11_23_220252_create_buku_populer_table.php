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
        Schema::create('buku_populer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buku_online_id')->nullable()->index('fk_buku_populer_to_buku_online');
            $table->foreignId('user_id')->nullable()->index('fk_buku_populer_to_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku_populer');
    }
};
