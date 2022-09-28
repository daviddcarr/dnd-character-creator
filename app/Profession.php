<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    //
    public function professionEquipment() {
        return $this->hasMany('App\ProfessionEquipment', 'profession_id');
    }
}
