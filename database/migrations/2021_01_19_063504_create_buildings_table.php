<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string('projecct');
            $table->string('fmcode');
            $table->double('area');
            $table->string('address');
            $table->string('zone');
            $table->double('lat');
            $table->double('long');
            $table->string('contact');
            $table->string('phone');
            $table->string('numberlayer');
            $table->string('floorbuilding');
            $table->string('roomnumber');
            $table->double('balance');
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
        Schema::dropIfExists('buildings');
    }
}
