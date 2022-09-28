<?php

use Illuminate\Database\Seeder;

class StatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stats')->insert([
            'name' => 'strength'
        ]);
        DB::table('stats')->insert([
            'name' => 'dexterity'
        ]);
        DB::table('stats')->insert([
            'name' => 'constitution'
        ]);
        DB::table('stats')->insert([
            'name' => 'intelligence'
        ]);
        DB::table('stats')->insert([
            'name' => 'wisdom'
        ]);
        DB::table('stats')->insert([
            'name' => 'charisma'
        ]);
    }
}
