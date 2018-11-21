<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseaseRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('record_id')->unsigned();
            $table->integer('disease_id')->unsigned();
            $table->timestamps();

            $table->foreign('record_id')->references('id')->on('records');
            $table->foreign('disease_id')->references('id')->on('diseases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_records');
    }
}
