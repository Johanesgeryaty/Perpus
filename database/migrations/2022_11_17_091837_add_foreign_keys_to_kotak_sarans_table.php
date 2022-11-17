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
        Schema::table('kotak_sarans', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_kotak_saran_to_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kotak_sarans', function (Blueprint $table) {
            Schema::dropIfExists('fk_kotak_saran_to_user');
        });
    }
};
