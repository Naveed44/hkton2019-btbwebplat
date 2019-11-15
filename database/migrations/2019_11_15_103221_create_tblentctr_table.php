<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblentctrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblentctr', function (Blueprint $table) {
            $table->bigIncrements('idnentctr');
            $table->unsignedBigInteger('idnentbid');
            $table->foreign('idnentbid')->references('idnentbid')->on('tblentbid');
            $table->decimal('ttlentctr');
            $table->integer('cmsentctr');
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
        Schema::dropIfExists('tblentctr');
    }
}
