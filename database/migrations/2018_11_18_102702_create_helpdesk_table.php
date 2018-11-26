<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpdeskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpdesk_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('note')->nullable();
        
            $table->timestamps();
        });

        Schema::create('helpdesk_question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brief')->nullable();
            $table->string('content');
            $table->unsignedInteger('helpdesk_category_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('helpdesk_category_id')->references('id')->on('helpdesk_category');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('helpdesk_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('helpdesk_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('helpdesk_question_id');
            $table->unsignedInteger('helpdesk_answer_id')->nullable();
            $table->unsignedInteger('status');
            $table->timestamps();

            $table->foreign('helpdesk_question_id')->references('id')->on('helpdesk_question');
            $table->foreign('helpdesk_answer_id')->references('id')->on('helpdesk_answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('helpdesk_activity');
        Schema::dropIfExists('helpdesk_answer');
        Schema::dropIfExists('helpdesk_question');
        Schema::dropIfExists('helpdesk_category');

    }
}
