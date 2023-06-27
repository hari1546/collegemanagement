<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("topic")->nullable();
            $table->string("resource_person")->nullable();
            $table->string("report")->nullable();
            $table->string("department_name")->nullable();
            $table->string("year")->nullable();
            $table->string("category")->nullable();
            $table->string("date")->nullable();
            $table->string("duration")->nullable();
            $table->string("sponsor")->nullable();
            $table->string("brochure")->nullable();
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
        Schema::dropIfExists('events');
    }
}
