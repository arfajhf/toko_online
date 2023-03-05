<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pemesanans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('admins');
            $table->bigInteger('no_transaksi');
            $table->string('nama_pemesan');
            $table->bigInteger('id_barang')->unsigned();
            $table->foreign('id_barang')->references('id')->on('data_barangs');
            $table->dateTime('tanggal_teransaksi');
            $table->integer('jumlah_beli');
            $table->string('total_harga');
            $table->bigInteger('id_pengirim')->unsigned();
            $table->foreign('id_pengirim')->references('id')->on('pengirims');
            $table->longText('alamat');
            $table->enum('status', ['dikemas', 'dikirim', 'selesai']);
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
        Schema::dropIfExists('data_pemesanans');
    }
}
