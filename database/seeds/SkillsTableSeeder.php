<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'stat_id' => 2,
            'name' => 'Acrobatics'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 5,
            'name' => 'Animal Handling'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 4,
            'name' => 'Arcana'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 1,
            'name' => 'Athletics'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 6,
            'name' => 'Deception'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 4,
            'name' => 'History'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 5,
            'name' => 'Insight'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 6,
            'name' => 'Intimidation'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 4,
            'name' => 'Investigation'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 5,
            'name' => 'Medicine'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 4,
            'name' => 'Nature'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 5,
            'name' => 'Perception'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 6,
            'name' => 'Performance'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 6,
            'name' => 'Persuasion'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 4,
            'name' => 'Religion'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 2,
            'name' => 'Sleight of Hand'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 2,
            'name' => 'Stealth'
        ]);
        DB::table('skills')->insert([
            'stat_id' => 5,
            'name' => 'Survival'
        ]);

    }
}
