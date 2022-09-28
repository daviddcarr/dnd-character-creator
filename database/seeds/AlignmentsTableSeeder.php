<?php

use Illuminate\Database\Seeder;

class AlignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('alignments')->insert([
            'name' => 'Lawful Good',
            'description' => '<strong>The Crusader</strong> - You do good and follow the law to the T.</p><p>Obi Wan, Ned Stark, Captain America, Superman',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('alignments')->insert([
            'name' => 'Lawful Neutral',
            'description' => '<strong>The Judge</strong> - You follow the law, even if it causes problems.</p><p>Robocop, Stannis Baratheon, Vision',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('alignments')->insert([
            'name' => 'Lawful Evil',
            'description' => '<strong>The Dominator</strong> - You use the rule of law to do unkind things, manipulting it even.</p><p>Tywin Lannister, Adolf Hitler, Darth Vader, Hannibal Lecter',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('alignments')->insert([
            'name' => 'Neutral Good',
            'description' => '<strong>The Benefactor</strong> - You do good regardless of rules</p><p>Luke Skywalker, Robin Hood, Samwell Tarly, Thor',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('alignments')->insert([
            'name' => 'True Neutral',
            'description' => '<strong>The Observer</strong> - You\'re ompletely moderate, prefering not to take sides.</p><p>Doctor Manhattan, Hawkeye, The Dude, Vulcans, Bronn (GoT)',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('alignments')->insert([
            'name' => 'Neutral Evil',
            'description' => '<strong>The Malefactor</strong> - You have ittle concern for law, only converned with self indulgence.</p><p>Cesei Lannister, Lex Luthor',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('alignments')->insert([
            'name' => 'Chaotic Good',
            'description' => '<strong>The Rebel</strong> - You follow no code whatsoever, but does good in his or her own way.</p><p>Han Solo, Ironman, Daenerys Targaryen, The Punisher',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('alignments')->insert([
            'name' => 'Chaotic Neutral',
            'description' => '<strong>The Free Spirit</strong> - You\'re neither good nor bad, mostly interested in self preservation.</p><p>Olenna Tyrell, Loki',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('alignments')->insert([
            'name' => 'Chaotic Evil',
            'description' => '<strong>The Destroyer</strong> - You\'re wildly evil just for the hell of it, revels in causing torment.</p><p>Joffrey Baratheon, The Joker',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
    }
}
