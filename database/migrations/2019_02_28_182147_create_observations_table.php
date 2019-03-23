<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('observation');
            $table->integer('severity_id')->index()->unsigned();
            $table->timestamps();
        });
        Schema::create('behavior_observation',function(Blueprint $table){
           $table->increments('id');
           $table->integer('behavior_id')->index()->unsigned();
           $table->integer('observation_id')->index()->unsigned();
           $table->primary(['observation_id','behavior_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observations');
        Schema::dropIfExists('behavior_observation');
    }
}
