<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_detail');
            $table->string('nama_barang');
            $table->integer('satuan_barang');
            $table->integer('sub_harga');
            $table->text('alamat_kirim');
            $table->date('tanggal_transaksi');
            $table->integer('poin_transaksi');
            $table->string('invoice');
            $table->integer('id_transaksi');
            $table->integer('id_produk_att');
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
        Schema::dropIfExists('detail_transaksi');
    }
}
