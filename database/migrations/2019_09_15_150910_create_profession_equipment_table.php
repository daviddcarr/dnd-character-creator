<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profession_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profession_id')->unsigned()->index();
            $table->foreign('profession_id')->references('id')->on('professions');
            $table->integer('equipment_id')->unsigned()->index();
            $table->foreign('equipment_id')->references('id')->on('equipment');
            $table->integer('option_set');
            $table->integer('count')->nullable();
            $table->integer('limit');
            $table->boolean('has_shield');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profession_equipment');
    }
}
