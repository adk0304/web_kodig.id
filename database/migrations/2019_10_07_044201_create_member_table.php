<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigIncrements('id_member');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama');
            $table->integer('no_telp');
            $table->date('TTL');
            $table->text('alamat');
            $table->string('foto_member');
            $table->integer('poin_member');
            $table->string('level_member');
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
        Schema::dropIfExists('member');
    }
}
