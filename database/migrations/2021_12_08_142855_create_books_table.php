<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // title author relase
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('NamaPembeli')->unique();
            $table->string('Barang');
            $table->string('Jumlah');
            $table->integer('Harga');
            $table->date('Tanggal')->nullable();
            $table->time('Jam')->nullable();
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
        Schema::dropIfExists('books');
    }
}
