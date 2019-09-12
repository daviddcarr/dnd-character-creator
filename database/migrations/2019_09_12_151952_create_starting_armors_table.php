<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartingArmorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('starting_armors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('ac');
            $table->integer('strength')->nullable();
            $table->boolean('stealth');
            $table->integer('weight');
            $table->string('type');
            $table->string('artificer')->nullable();
            $table->string('barbarian')->nullable();
            $table->string('bard')->nullable();
            $table->string('blood_hunter')->nullable();
            $table->string('cleric')->nullable();
            $table->string('druid')->nullable();
            $table->string('fighter')->nullable();
            $table->string('monk')->nullable();
            $table->string('paladin')->nullable();
            $table->string('ranger')->nullable();
            $table->string('rogue')->nullable();
            $table->string('sorcerer')->nullable();
            $table->string('warlock')->nullable();
            $table->string('wizard')->nullable();
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
        Schema::dropIfExists('starting_armors');
    }
}
