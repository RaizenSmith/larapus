<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pinjams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_peminjaman');
            $table->foreign('id_peminjaman')->references('id')->on('peminjamen')->onDelete('CASCADE');
            $table->unsignedBigInteger('id_buku');            
            $table->foreign('id_buku')->references('id')->on('bukus')->onDelete('CASCADE');
            $table->date('tgl_kembali');
            $table->double('denda');
            $table->String('status_kembali');
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
        Schema::dropIfExists('detail_pinjams');
    }
}
