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
            $table->unsignedInteger('student_id')->index();
            $table->unsignedInteger('behavior_id')->index();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('behavior_id')->references('id')->on('behaviors')->onDelete('cascade');
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
