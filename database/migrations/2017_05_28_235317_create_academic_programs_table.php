<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->String('names');
            $table->integer('faculties_id')->unsigned();
            $table->foreign('faculties_id')->references('id')->on('faculties'); 

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
        Schema::dropIfExists('academic_programs');
    }
}
