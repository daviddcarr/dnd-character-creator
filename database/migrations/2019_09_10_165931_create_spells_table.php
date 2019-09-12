<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spells', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('level');
            $table->string('school');
            $table->boolean('ritual');
            $table->string('casting_time');
            $table->string('range');
            $table->string('duration');
            $table->boolean('concentration');
            $table->boolean('verbal');
            $table->boolean('somatic');
            $table->boolean('materialistic');
            $table->string('materials', 1024)->nullable();
            $table->boolean('bard');
            $table->boolean('cleric');
            $table->boolean('druid');
            $table->boolean('paladin');
            $table->boolean('ranger');
            $table->boolean('sorcerer');
            $table->boolean('warlock');
            $table->boolean('wizard');
            $table->string('description', 8192);
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
        Schema::dropIfExists('spells');
    }
}
