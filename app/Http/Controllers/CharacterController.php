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
            'cantrips' => Spell::where('level', '=', 0)->get(),
            'spells_first' => Spell::where('level', '=', 1)->get(),
        ];
        return view('character.create', compact('options'));
    }
    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'name' => 'required|min:2|max:255',
            'age' => 'nullable',
            'height' => 'nullable',
            'weight' => 'nullable',
            'eyes' => 'nullable',
            'skin' => 'nullable',
            'hair' => 'nullable',
            'race' => 'required',
            'profession' => 'required',
            'alignment' => 'required',
            'background' => 'nullable',
            'strength' => 'required',
            'dexterity' => 'required',
            'constitution' => 'required',
            'intelligence' => 'required',
            'wisdom' => 'required',
            'charisma' => 'required',
            'personality' => 'nullable',
            'ideals' => 'nullable',
            'bonds' => 'nullable',
            'flaws' => 'nullable',
            'backstory' => 'nullable',
            'appearance' => 'nullable',
            'misc' => 'nullable'
        ]);
        $input = $request->all();
        $race = Race::find(request('race'));
        $profession = Profession::find(request('profession'));
        $character = new Character;
        
        $character->user_id = Auth::user()->id;
        // Character Base Info
        $character->name = $input['name'];
        $character->level = 1;
        $character->race = $race->id;
        $character->profession = $profession->id;
        $character->age = $input['age'];
        $character->height = $input['height'];
        $character->weight = $input['weight'];
        $character->eyes = $input['eyes'];
        $character->skin = $input['skin'];
        $character->hair = $input['hair'];
        $character->alignment = $input['alignment'];
        $character->background = $input['background'];
        $character->personality = $input['personality'];
        $character->ideals = $input['ideals'];
        $character->bonds = $input['bonds'];
        $character->flaws = $input['flaws'];
        $character->backstory = $input['backstory'];
        $character->appearance = $input['appearance'];
        $character->misc = $input['misc'];
        
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
        if (!empty($input['equipment'])) {
            $character->equipment()->sync($input['equipment']);
        }
        if (!empty($input['race'])) {
            $languages = [1];
            if (!is_null($race->language_1)) {
                array_push($languages, $race->language_1);
            }
            if (!is_null($race->language_2)) {
                array_push($languages, $race->language_2);
            }
            if (!is_null($race->language_3)) {
                array_push($languages, $race->language_3);
            }
            if (!empty($input['languages'])) {
                foreach($input['languages'] as $languageId) {
                    if (!in_array($languageId, $languages)) {
                        array_push($languages, $languageId);
                    }
                }
            }
            $character->language()->sync($languages);
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
