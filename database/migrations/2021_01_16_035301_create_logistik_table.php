<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogistikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logistik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bencana_id')->nullable();
            $table->foreign('bencana_id')->references('id')->on('bencana');

            $table->string('jumlah_pengungsi')->nullable();
            $table->string('pengungsi_dewasa')->nullable();
            $table->string('pengungsi_anak')->nullable();
            $table->string('pengungsi_lansia')->nullable();
            $table->string('pengungsi_bumil')->nullable();
            $table->string('pengungsi_balita')->nullable();

            $table->string('banyak_selimut')->nullable();
            $table->string('banyak_beras')->nullable();
            $table->string('banyak_masker')->nullable();
            $table->string('banyak_gandum')->nullable();
            $table->string('banyak_mie')->nullable();
            $table->string('banyak_kasur')->nullable();
            $table->string('kebutuhan_lain')->nullable();
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
        Schema::dropIfExists('logistiks');
    }
}
