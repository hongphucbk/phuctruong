<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnIntoHelpdeskActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('helpdesk_activity', function (Blueprint $table) {
            $table->unsignedInteger('raised_id')->nullable();
            $table->unsignedInteger('assign_id')->nullable();

            $table->foreign('raised_id')->references('id')->on('users');
            $table->foreign('assign_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('helpdesk_activity', function (Blueprint $table) {
            $table->dropColumn('assign_id');
            $table->dropColumn('raised_id');
        });
    }
}
