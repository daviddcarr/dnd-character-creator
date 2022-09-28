<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StartingArmor;

class Character extends Model
{
    protected $guarded = [];
    
    //
    public function user() {
        return $this->hasOne('App\User');
    }
    
    public function spell() {
        return $this->belongsToMany('App\Spell', 'character_spells');
    }
    public function equipment() {
        return $this->belongsToMany('App\Equipment', 'character_equipment');
    }
    public function language() {
        return $this->belongsToMany('App\Language', 'character_languages');
    }
    
    public function ArmorClass() {
        if ($this->has_starting_armor) {
            $armor = StartingArmor::find($this->armor);
        } else {
            return 10 + modifierAsInt($this->dexterity);
        }
        $shield = $this->equipment()->where('type', 'armor')->first();
        if (!empty($shield)) {
            return $armor->ac + $shield->ac_bonus + modifierAsInt($this->dexterity);
        }
        return $armor->ac + modifierAsInt($this->dexterity);
    }
    
    public function ProficiencyBonus() {
        return floor(($this->level - 1) / 4) + 2;
    }
}
