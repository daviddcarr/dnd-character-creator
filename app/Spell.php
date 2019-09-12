<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    //
    public function character() {
        return $this->belongsToMany('App\Character', 'character_spells', 'spell_id');
    }
}
