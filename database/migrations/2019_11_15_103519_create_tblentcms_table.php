<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblentcmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblentcms', function (Blueprint $table) {
            $table->bigIncrements('idnentcms');
            $table->unsignedBigInteger('idnentctr');
            $table->foreign('idnentctr')->references('idnentctr')->on('idnentctr');
            $table->decimal('ttlentcms');
            $table->timestamp('datsndinv')->nullable();
            $table->timestamp('datpaycms')->nullable();
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
        Schema::dropIfExists('tblentcms');
    }
}
