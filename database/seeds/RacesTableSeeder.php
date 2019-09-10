<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('races')->insert([
            'name' => 'Aarakocra',
            'strength' => 0,
            'dexterity' => 2,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 1,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Aasimar',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 2,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Bugbear',
            'strength' => 2,
            'dexterity' => 1,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Centaur',
            'strength' => 2,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 1,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Changeling',
            'strength' => 0,
            'dexterity' => 1,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 2,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Dragonborn',
            'strength' => 2,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 1,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Dwarf',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Elf',
            'strength' => 0,
            'dexterity' => 2,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Feral Tiefling',
            'strength' => 0,
            'dexterity' => 2,
            'constitution' => 0,
            'intelligence' => 1,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Firbolg',
            'strength' => 1,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 2,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Genasi (Air)',
            'strength' => 0,
            'dexterity' => 1,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Genasi (Earth)',
            'strength' => 1,
            'dexterity' => 0,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Genasi (Fire)',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 2,
            'intelligence' => 1,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Genasi (Water)',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 1,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Gith',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 1,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Gnome',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 2,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Goblin',
            'strength' => 0,
            'dexterity' => 2,
            'constitution' => 1,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Goliath',
            'strength' => 2,
            'dexterity' => 0,
            'constitution' => 1,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Half-Elf',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 2,
            'bonus' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Halfling',
            'strength' => 0,
            'dexterity' => 2,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Half-Orc',
            'strength' => 2,
            'dexterity' => 0,
            'constitution' => 1,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Hobgoblin',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 2,
            'intelligence' => 1,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Human',
            'strength' => 1,
            'dexterity' => 1,
            'constitution' => 1,
            'intelligence' => 1,
            'wisdom' => 1,
            'charisma' => 1,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Kalashtar',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 1,
            'charisma' => 1,
            'bonus' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Kenku',
            'strength' => 0,
            'dexterity' => 2,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 1,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Kobold',
            'strength' => -2,
            'dexterity' => 2,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Lizardfolk',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 1,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Loxodon',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 1,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Minotaur',
            'strength' => 2,
            'dexterity' => 0,
            'constitution' => 1,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Orc',
            'strength' => 2,
            'dexterity' => 0,
            'constitution' => 1,
            'intelligence' => -2,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'shifter',
            'strength' => 0,
            'dexterity' => 1,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Simic Hybrid',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Tabaxi',
            'strength' => 0,
            'dexterity' => 2,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 1,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Tiefling',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 1,
            'wisdom' => 0,
            'charisma' => 2,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Tortle',
            'strength' => 2,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 0,
            'wisdom' => 1,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Triton',
            'strength' => 1,
            'dexterity' => 0,
            'constitution' => 1,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 1,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Vedalkan',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 2,
            'wisdom' => 1,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Verdan',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 1,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 2,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Warforged',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 1,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 0,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('races')->insert([
            'name' => 'Yuan-ti Pureblood',
            'strength' => 0,
            'dexterity' => 0,
            'constitution' => 0,
            'intelligence' => 1,
            'wisdom' => 0,
            'charisma' => 2,
            'bonus' => 0,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
    }

}
