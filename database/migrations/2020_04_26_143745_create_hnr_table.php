<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHnrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hnr', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->date('tanggal');
            $table->integer('nominal');
            $table->string('jenishr',50);
            $table->string('keterangan',50);
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
        Schema::dropIfExists('hnr');
    }
}
