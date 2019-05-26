<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_modbustcp_device', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('IPaddress');
            $table->integer('display')->default(1);   
            $table->string('note')->nullable();
            $table->timestamps();
        });

        Schema::create('ins_modbustcp_parameter', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('device_id');
            $table->string('name');
            $table->string('register');
            $table->integer('display')->default(1);   
            $table->string('note')->nullable();            
            $table->timestamps();

            $table->foreign('device_id')->references('id')->on('ins_modbustcp_device');
        });

        Schema::create('ins_modbustcp_value', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parameter_id');
            $table->double('value');
            $table->integer('display')->default(1);   
            $table->string('note')->nullable();            
            $table->timestamps();

            $table->foreign('parameter_id')->references('id')->on('ins_modbustcp_parameter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ins_modbustcp_value');
        Schema::dropIfExists('ins_modbustcp_parameter');
        Schema::dropIfExists('ins_modbustcp_device');
    }
}
