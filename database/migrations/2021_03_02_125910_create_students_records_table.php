<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admission');
            $table->string('fullname');
            $table->string('sex');
            $table->string('disability');
            $table->string('birthplace');
            $table->string('dob');
            $table->string('housenumber');
            $table->string('kebele');
            $table->string('town');
            $table->string('woreda');
            $table->string('zone');
            $table->string('region');
            $table->string('image');
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
        Schema::dropIfExists('students_records');
    }
}
