<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name');
            $table->date('init_date');
            $table->text('observation');
            $table->integer('groups_id')->unsigned();
            $table->foreign('groups_id')->references('id')->on('groups');

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
        Schema::dropIfExists('research_centers');
    }
}
