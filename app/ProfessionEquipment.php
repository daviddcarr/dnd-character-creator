<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionEquipment extends Model
{
    //
    public function profession() {
        return $this->belongsTo('App\Profession', 'professions');
    }
    public function equipment() {
        return $this->belongsTo('App\Equipment', 'equipment');
    }
}
