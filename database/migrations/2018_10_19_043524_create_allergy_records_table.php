<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergyRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergy_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('record_id')->unsigned();
            $table->integer('allergy_id')->unsigned();
            $table->timestamps();

            $table->foreign('record_id')->references('id')->on('records');
            $table->foreign('allergy_id')->references('id')->on('allergies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allergy_records');
    }
}
