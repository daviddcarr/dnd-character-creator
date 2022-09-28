<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //
    public function character() {
        return $this->belongsToMany('App\Character', 'character_equipment', 'equipment_id');
    }
    public function professionEquipment() {
        return $this->hasMany('App\ProfessionEquipment', 'equipment_id');
    }
}
