<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pi_date');
            $table->longtext('pi_capacity')->nullable();
            $table->longtext('pi_need_behavior')->nullable();
            $table->longtext('pi_need_school')->nullable();
            $table->longtext('pi_need_other')->nullable();
            $table->longtext('pi_goal')->nullable();
            $table->longtext('pi_way')->nullable();
            $table->integer('student_id');
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
        Schema::dropIfExists('pis');
    }
}
