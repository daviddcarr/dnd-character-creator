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
            $table->integer('artificer')->nullable();
            $table->integer('barbarian')->nullable();
            $table->integer('bard')->nullable();
            $table->integer('blood_hunter')->nullable();
            $table->integer('cleric')->nullable();
            $table->integer('druid')->nullable();
            $table->integer('fighter')->nullable();
            $table->integer('monk')->nullable();
            $table->integer('paladin')->nullable();
            $table->integer('ranger')->nullable();
            $table->integer('rogue')->nullable();
            $table->integer('sorcerer')->nullable();
            $table->integer('warlock')->nullable();
            $table->integer('wizard')->nullable();
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
