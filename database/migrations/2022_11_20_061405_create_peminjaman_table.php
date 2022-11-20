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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pinjam');
            $table->foreignid('peminjam_id');
            $table->foreignid('admin_pinjam')->nullable();
            $table->foreignid('admin_kembali')->nullable();
            $table->integer('status');
            $table->integer('denda')->nullable();
            $table->date('tangga_pinjam')->nullable();
            $table->date('tangga_kembali')->nullable();
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
        Schema::dropIfExists('peminjaman');
    }
};
