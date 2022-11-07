<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukuoffline', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('genre');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->date('tahun_terbit');
            $table->string('cover_buku')->nullable();
            $table->integer('jumlah_halaman');
            $table->integer('stok_buku');
            $table->rememberToken()->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukuofflines');
    }
};
