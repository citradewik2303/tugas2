<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiPeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_film',100);
            $table->string('nama_peminjam',100);
            $table->string('no_ktp',100);
            $table->string('foto_ktp',100);
            $table->string('tanggal_pinjam',100);
            $table->string('tanggal_kembali',100);
            $table->string('harga_sewa',100);
            $table->string('status',100);
            $table->string('tanggal_input_data',100);
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
        Schema::dropIfExists('transaksi_peminjaman');
    }
}
