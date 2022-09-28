<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'Common'
        ]);
        DB::table('languages')->insert([
            'name' => 'Dwarvish'
        ]);
        DB::table('languages')->insert([
            'name' => 'Elvish'
        ]);
        DB::table('languages')->insert([
            'name' => 'Giant'
        ]);
        DB::table('languages')->insert([
            'name' => 'Gnomish'
        ]);
        DB::table('languages')->insert([
            'name' => 'Goblin'
        ]);
        DB::table('languages')->insert([
            'name' => 'Halfling'
        ]);
        DB::table('languages')->insert([
            'name' => 'Orc'
        ]);
        DB::table('languages')->insert([
            'name' => 'Abyssal'
        ]);
        DB::table('languages')->insert([
            'name' => 'Celestial'
        ]);
        DB::table('languages')->insert([
            'name' => 'Draconic'
        ]);
        DB::table('languages')->insert([
            'name' => 'Kraul'
        ]);
        DB::table('languages')->insert([
            'name' => 'Loxodon'
        ]);
        DB::table('languages')->insert([
            'name' => 'Merfolk'
        ]);
        DB::table('languages')->insert([
            'name' => 'Minotaur'
        ]);
        DB::table('languages')->insert([
            'name' => 'Sphinx'
        ]);
        DB::table('languages')->insert([
            'name' => 'Sylvan'
        ]);
        DB::table('languages')->insert([
            'name' => 'Vedalken'
        ]);
        DB::table('languages')->insert([
            'name' => 'Deep Speech'
        ]);
        DB::table('languages')->insert([
            'name' => 'Infernal'
        ]);
        DB::table('languages')->insert([
            'name' => 'Primordial'
        ]);
        DB::table('languages')->insert([
            'name' => 'Undercommon'
        ]);
        DB::table('languages')->insert([
            'name' => 'Aarakocra'
        ]);
        DB::table('languages')->insert([
            'name' => 'Druidic'
        ]);
        DB::table('languages')->insert([
            'name' => 'Gith'
        ]);
        DB::table('languages')->insert([
            'name' => 'Thieves\' Cant'
        ]);
        DB::table('languages')->insert([
            'name' => 'Riedran'
        ]);
        DB::table('languages')->insert([
            'name' => 'Quori'
        ]);
        DB::table('languages')->insert([
            'name' => 'Silent Speech'
        ]);
    }
}
