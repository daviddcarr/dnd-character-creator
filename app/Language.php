<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    public function character() {
        return $this->belongsToMany('App\Character', 'character_languages', 'language_id');
    }
}
