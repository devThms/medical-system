<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicineRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('record_id')->unsigned();
            $table->integer('medicine_id')->unsigned();
            $table->string('suggested');
            $table->timestamps();

            $table->foreign('record_id')->references('id')->on('records');
            $table->foreign('medicine_id')->references('id')->on('medicines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicine_records');
    }
}
