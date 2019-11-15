<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblentbidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblentbid', function (Blueprint $table) {
            $table->bigIncrements('idnentbid');
            $table->unsignedBigInteger('idnentauc');
            $table->foreign('idnentauc')->references('idnentauc')->on('tblentauc');
            $table->unsignedBigInteger('userdid');
            $table->foreign('usersid')->references('id')->on('users');
            $table->timestamp('datissbid');
            $table->decimal('prcunibid');
            $table->decimal('qununibid');
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
        Schema::dropIfExists('tblentbid');
    }
}
