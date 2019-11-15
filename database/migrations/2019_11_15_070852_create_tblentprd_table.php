<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblentprdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblentprd', function (Blueprint $table) {
            $table->bigIncrements('idnentprd'); //id
            $table->unsignedBigInteger('idnentcls');
            $table->foreign('idnentcls')->references('idnentcls')->on('catentcls');
            $table->unsignedBigInteger('idnentqul');
            $table->foreign('idnentqul')->references('idnentqul')->on('catentqul');
            $table->unsignedBigInteger('idnentuni');
            $table->foreign('idnentuni')->references('idnentuni')->on('catentuni');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')->references('id')->on('users');
            $table->string('namentprd');        //name
            $table->string('dscentprd');        //name
            $table->decimal('qunentprd');       //quantity
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
        Schema::dropIfExists('tblentprd');
    }
}
