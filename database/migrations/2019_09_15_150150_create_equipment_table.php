<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('style')->nullable();
            $table->string('damage')->nullable();
            $table->integer('weight');
            $table->string('cost');
            $table->string('description', 1024)->nullable();
            $table->string('ammunition')->nullable();
            $table->integer('ammunition_count')->nullable();
            $table->integer('ac_bonus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
}
