<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Character;
use App\Race;
use App\Alignment;
use App\Background;
use App\Profession;
use App\StartingArmor;
use App\Spell;
use Carbon\Carbon;

class CharacterController extends Controller
{
    //
    public function create() {
        
        $options = [
            'races' => Race::all(),
            'professions' => Profession::all(),
            'alignments' => Alignment::all(),
            'backgrounds' => Background::all(),
            'armors' => StartingArmor::all(),
            'spells' => Spell::all()
        ];
        return view('character.create', compact('options'));
    }
    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'name' => 'required|min:2|max:255',
            'age' => 'nullable',
            'race' => 'required',
            'profession' => 'required',
            'alignment' => 'required',
            'background' => 'nullable',
            'strength' => 'required',
            'dexterity' => 'required',
            'constitution' => 'required',
            'intelligence' => 'required',
            'wisdom' => 'required',
            'charisma' => 'required'
        ]);
        $input = $request->all();
        $race = Race::find(request('race'));
        $profession = Profession::find(request('profession'));
        $character = new Character;
        
        $character->user_id = Auth::user()->id;
        // Character Base Info
        $character->name = $input['name'];
        $character->level = $input['level'];
        $character->race = $race->id;
        $character->profession = $profession->id;
        $character->age = $input['age'];
        $character->alignment = $input['alignment'];
        $character->background = $input['background'];
        
        // Calculate character's HP
        $hp = $profession->hit_dice + modifierAsInt(request('constitution'));
        $character->max_hp = $hp;
        $character->current_hp = $hp;
        $character->has_starting_armor = true;
        $character->armor = $input['armor'];
        
        // Add race based ability scores
        $character->strength = request('strength') + $race->strength;
        $character->dexterity = request('dexterity') + $race->dexterity;
        $character->constitution = request('constitution') + $race->constitution;
        $character->intelligence = request('intelligence') + $race->intelligence;
        $character->wisdom = request('wisdom') + $race->wisdom;
        $character->charisma = request('charisma') + $race->charisma;
        $character->created_at = Carbon::now();
        $character->updated_at = Carbon::now();
        $character->save();
        
        if (!empty($input['spells'])) {
            $character->spell()->sync($input['spells']);
        }

        return redirect('/home');
    }
    public function show($id) {
        $character = Character::find($id);
        return view('character.index', compact('character'));
    }
    public function edit(Character $character) {
        $options = [
            'character' => $character,
            'races' => Race::all(),
            'professions' => Profession::all(),
            'alignments' => Alignment::all(),
            'backgrounds' => Background::all()
        ];
        return view('character.edit', compact('options'));

    }
}
