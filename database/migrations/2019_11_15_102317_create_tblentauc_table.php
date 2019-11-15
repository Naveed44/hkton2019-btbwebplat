<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblentauc', function (Blueprint $table) {
            $table->bigIncrements('idnentauc');
            $table->unsignedBigInteger('idnentprd');
            $table->foreign('idnentprd')->references('idnentprd')->on('tblentprd');
            $table->timestamp('datstrauc');
            $table->timestamp('datendauc');
            $table->decimal('basprcauc');
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
        Schema::dropIfExists('tblentauc');
    }
}
