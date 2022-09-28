<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->integer('level');
            $table->integer('race');
            $table->integer('profession');
            $table->integer('max_hp')->nullable();
            $table->integer('current_hp')->nullable();
            $table->integer('age')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('eyes')->nullable();
            $table->string('skin')->nullable();
            $table->string('hair')->nullable();
            $table->integer('alignment');
            $table->integer('background');
            $table->boolean('has_starting_armor')->nullable();
            $table->integer('armor');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('constitution');
            $table->integer('intelligence');
            $table->integer('wisdom');
            $table->integer('charisma');
            $table->string('personality', 2048)->nullable();
            $table->string('ideals', 2048)->nullable();
            $table->string('bonds', 2048)->nullable();
            $table->string('flaws', 2048)->nullable();
            $table->string('appearance', 2048)->nullable();
            $table->string('backstory', 2048)->nullable();
            $table->string('misc', 2048)->nullable();
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
        Schema::dropIfExists('characters');
    }
}
