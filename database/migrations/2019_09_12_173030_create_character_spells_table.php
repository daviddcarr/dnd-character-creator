<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_spells', function (Blueprint $table) {
            $table->integer('character_id')->unsigned()->index();
            $table->foreign('character_id')->references('id')->on('characters');
            $table->integer('spell_id')->unsigned()->index();
            $table->foreign('spell_id')->references('id')->on('spells');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_spells');
    }
}
