<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasoks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_distributor');
            $table->foreign('id_distributor')->references('id')->on('distributors')->onDelete('cascade');

            $table->unsignedBigInteger('id_buku');
            $table->foreign('id_buku')->references('id')->on('bukus')->onDelete('cascade');
            
            $table->Integer('jumlah');
            $table->date('tanggal');
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
        Schema::dropIfExists('pasoks');
    }
}
