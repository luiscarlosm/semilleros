<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names');
            $table->string('lastnames');
            $table->string('email');
            $table->string('movil');
            $table->string('doc_type');
            $table->string('type');
            $table->integer('projects_id')->unsigned();
            $table->integer('academic_programs_id')->unsigned();
            $table->integer('users_id')->unsigned(); 
            $table->foreign('projects_id')->references('id')->on('projects');
            $table->foreign('academic_programs_id')->references('id')->on('academic_programs');
            $table->foreign('users_id')->references('id')->on('users');

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
        Schema::dropIfExists('members');
    }
}
