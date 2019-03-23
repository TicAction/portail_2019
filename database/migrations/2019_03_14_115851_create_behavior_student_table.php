<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBehaviorStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behavior_student', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->index();
            $table->integer('behavior_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('behavior_student', function (Blueprint $table) {
            //
        });
    }
}
