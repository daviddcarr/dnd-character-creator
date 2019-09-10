<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Race;
use \App\Profession;

class CharacterController extends Controller
{
    //
    public function create() {
        
        $options = [
            'races' => Race::all(),
            'professions' => Profession::all()
        ];
        return view('character.create', compact('options'));
    }
    public function edit() {
        
    }
}
