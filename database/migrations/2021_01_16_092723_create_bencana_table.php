<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBencanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bencana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_bencana_id')->nullable();
            $table->foreign('jenis_bencana_id')->references('id')->on('jenis_bencana');

            $table->string('nama_bencana')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('bencana');
    }
}
