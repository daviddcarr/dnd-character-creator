<?php

use Illuminate\Database\Seeder;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('professions')->insert([
            'name' => 'Artificer',
            'hit_dice' => 8,
            'spellcasting_ability' => 'intelligence',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Barbarian',
            'hit_dice' => 12,
            'spellcasting_ability' => null,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Bard',
            'hit_dice' => 8,
            'spellcasting_ability' => 'charisma',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Blood Hunter',
            'hit_dice' => 10,
            'spellcasting_ability' => null,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Cleric',
            'hit_dice' => 8,
            'spellcasting_ability' => 'wisdom',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Druid',
            'hit_dice' => 8,
            'spellcasting_ability' => 'wisdom',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Fighter',
            'hit_dice' => 10,
            'spellcasting_ability' => null,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Monk',
            'hit_dice' => 8,
            'spellcasting_ability' => null,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Paladin',
            'hit_dice' => 10,
            'spellcasting_ability' => 'wisdom',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Ranger',
            'hit_dice' => 10,
            'spellcasting_ability' => 'wisdom',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Rogue',
            'hit_dice' => 8,
            'spellcasting_ability' => null,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Sorcerer',
            'hit_dice' => 6,
            'spellcasting_ability' => 'charisma',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Warlock',
            'hit_dice' => 8,
            'spellcasting_ability' => 'charisma',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Wizard',
            'hit_dice' => 6,
            'spellcasting_ability' => 'intelligence',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
    }
}
