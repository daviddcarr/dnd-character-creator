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
            'description' => 'A supreme inventor and a master of unlocking magic in everyday objects.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Barbarian',
            'hit_dice' => 12,
            'spellcasting_ability' => null,
            'description' => 'A fierce warrior of primitive background who can enter a battle rage.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Bard',
            'hit_dice' => 8,
            'spellcasting_ability' => 'charisma',
            'description' => 'An inspiring magician whose power echoes the music of creation.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Blood Hunter',
            'hit_dice' => 10,
            'spellcasting_ability' => null,
            'description' => 'A fanatical slayer that embraces dark knowledge to destroy evil.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Cleric',
            'hit_dice' => 8,
            'spellcasting_ability' => 'wisdom',
            'description' => 'A priestly champion who wields divine magic in service of a higher power.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Druid',
            'hit_dice' => 8,
            'spellcasting_ability' => 'wisdom',
            'description' => 'A priest of the Old Faith, wielding the powers of nature— moonlight and plant growth, fire and lightning—and adopting animal forms.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Fighter',
            'hit_dice' => 10,
            'description' => 'A master of martial combat, skilled with a variety of weapons and armor.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Monk',
            'hit_dice' => 8,
            'spellcasting_ability' => null,
            'description' => 'A master of martial arts, skilled with fighting hands and martial monk weapons.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Paladin',
            'hit_dice' => 10,
            'spellcasting_ability' => 'wisdom',
            'description' => 'A holy warrior bound to a sacred oath.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Ranger',
            'hit_dice' => 10,
            'spellcasting_ability' => 'wisdom',
            'description' => 'A master of ranged combat, one with nature.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Rogue',
            'hit_dice' => 8,
            'spellcasting_ability' => null,
            'description' => 'A scoundrel who uses stealth and trickery to overcome obstacles and enemies.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Sorcerer',
            'hit_dice' => 6,
            'spellcasting_ability' => 'charisma',
            'description' => 'A spellcaster who draws on inherent magic from a gift or bloodline.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Warlock',
            'hit_dice' => 8,
            'spellcasting_ability' => 'charisma',
            'description' => 'A wielder of magic that is derived from a bargain with an extraplanar entity.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('professions')->insert([
            'name' => 'Wizard',
            'hit_dice' => 6,
            'spellcasting_ability' => 'intelligence',
            'description' => 'A scholarly magic-user capable of manipulating the structures of reality.',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
    }
}
