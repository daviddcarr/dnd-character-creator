@extends('layouts.app')

@section('content')
    <div class="container" id="character-creator">
        @guest
            <h1>You must register to create a character</h1>
        @else
            <h1>Create @{{ name }}</h1>
            <form method="POST" action="/character">
                {{ csrf_field() }}
                <input type="number" class="d-none" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="title">Name</label>
                        <input 
                        type="text" 
                        class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" 
                        id="name" 
                        placeholder="name" 
                        name="name" 
                        required
                        v-model="name">
                    </div>
                    <div class="form-group col-12 col-md-1">
                        <label for="title">Age</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('age') ? 'border-danger' : '' }}" 
                        id="age" 
                        placeholder="Age" 
                        name="age" 
                        value="{{ old('age') }}"
                        required>
                    </div>
                    <div class="form-group col-12 col-md-1">
                        <label for="height">Height</label>
                        <input 
                        type="text" 
                        class="form-control {{ $errors->has('height') ? 'border-danger' : '' }}" 
                        id="height" 
                        placeholder="Height" 
                        name="height" 
                        required>
                    </div>
                    <div class="form-group col-12 col-md-1">
                        <label for="weight">Weight</label>
                        <input 
                        type="text" 
                        class="form-control {{ $errors->has('weight') ? 'border-danger' : '' }}" 
                        id="weight" 
                        placeholder="Weight" 
                        name="weight" 
                        required>
                    </div>
                    <div class="form-group col-12 col-md-1">
                        <label for="eyes">Eyes</label>
                        <input 
                        type="text" 
                        class="form-control {{ $errors->has('eyes') ? 'border-danger' : '' }}" 
                        id="eyes" 
                        placeholder="Eyes" 
                        name="eyes" 
                        required>
                    </div>
                    <div class="form-group col-12 col-md-1">
                        <label for="skin">Skin</label>
                        <input 
                        type="text" 
                        class="form-control {{ $errors->has('skin') ? 'border-danger' : '' }}" 
                        id="skin" 
                        placeholder="Skin" 
                        name="skin" 
                        required>
                    </div>
                    <div class="form-group col-12 col-md-1">
                        <label for="hair">Hair</label>
                        <input 
                        type="text" 
                        class="form-control {{ $errors->has('hair') ? 'border-danger' : '' }}" 
                        id="hair" 
                        placeholder="Hair" 
                        name="hair" 
                        required>
                    </div>
                    {{-- <div class="form-group col-12 col-md-2 col-lg-1">
                        <label for="level">Level</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('level') ? 'border-danger' : '' }}" 
                        id="level" 
                        placeholder="Level" 
                        name="level" 
                        value="1"
                        required>
                    </div> --}}
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6 col-lg-3">
                        <label for="race">Race</label>
                        <select class="form-control {{ $errors->has('race') ? 'border-danger' : '' }}" 
                            id="race" 
                            name="race" 
                            v-model="race.id"
                            @change="raceChanged()">
                          @foreach($options['races'] as $race)
                              <option value="{{ $race->id }}">{{ $race->name }}</option>
                          @endforeach
                        </select>
                        <div class="card mt-2">
                            <img src="/img/placeholder.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">@{{ race.name }}</h4>
                                <p v-html="race.description"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6 col-lg-3">
                        <label for="profession">Professions</label>
                        <select class="form-control {{ $errors->has('profession') ? 'border-danger' : '' }}" 
                            id="profession" 
                            name="profession"
                            v-model="profession.id"
                            @change="professionChanged()">
                          @foreach($options['professions'] as $profession)
                              <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                          @endforeach
                        </select>
                        <div class="card mt-2">
                            <img :src="'/img/professions/' + profession.id + '.png'" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">@{{ profession.name }}</h4>
                                <p v-html="profession.description"></p>
                            </div>
                        </div>
                      </div>
                      <div class="form-group col-12 col-md-6 col-lg-3">
                        <label for="alignment">Alignment</label>
                        <select class="form-control {{ $errors->has('alignment') ? 'border-danger' : '' }}" id="alignment" name="alignment" v-model="alignment.id" @change="alignmentChanged()">
                            @foreach($options['alignments'] as $alignment)
                                <option value="{{ $alignment->id }}">{{ $alignment->name }}</option>
                            @endforeach
                        </select>
                        <div class="card mt-2">
                            <img src="/img/placeholder.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">@{{ alignment.name }}</h4>
                                <p v-html="alignment.description"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6 col-lg-3">
                        <label for="background">Background</label>
                        <select class="form-control {{ $errors->has('background') ? 'border-danger' : '' }}" id="background" name="background" v-model="background.id" @change="backgroundChanged()">
                            @foreach($options['backgrounds'] as $background)
                                <option value="{{ $background->id }}">{{ $background->name }}</option>
                            @endforeach
                        </select>
                        <div class="card mt-2">
                            <img src="/img/placeholder.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">@{{ background.name }}</h4>
                                <p v-html="background.description"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6 col-md-4 col-lg-2">
                        <label for="strength">Strength</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('strength') ? 'border-danger' : '' }}" 
                        id="strength" 
                        min="3" max="18"
                        placeholder="STR" 
                        name="strength" 
                        value="{{ old('strength') }}"
                        required>
                    </div>
                    <div class="form-group col-6 col-md-4 col-lg-2">
                        <label for="dexterity">Dexterity</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('dexterity') ? 'border-danger' : '' }}" 
                        id="dexterity" 
                        min="3" max="18"
                        placeholder="DEX" 
                        name="dexterity" 
                        value="{{ old('dexterity') }}"
                        required>
                    </div>
                    <div class="form-group col-6 col-md-4 col-lg-2">
                        <label for="constitution">Constitution</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('constitution') ? 'border-danger' : '' }}" 
                        id="constitution" 
                        min="3" max="18"
                        placeholder="CON" 
                        name="constitution" 
                        value="{{ old('constitution') }}"
                        required>
                    </div>
                    <div class="form-group col-6 col-md-4 col-lg-2">
                        <label for="intelligence">Intelligence</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('intelligence') ? 'border-danger' : '' }}" 
                        id="intelligence" 
                        min="3" max="18"
                        placeholder="INT" 
                        name="intelligence" 
                        value="{{ old('intelligence') }}"
                        required>
                    </div>
                    <div class="form-group col-6 col-md-4 col-lg-2">
                        <label for="wisdom">Wisdom</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('wisdom') ? 'border-danger' : '' }}" 
                        id="wisdom" 
                        min="3" max="18"
                        placeholder="WIS" 
                        name="wisdom" 
                        value="{{ old('wisdom') }}"
                        required>
                    </div>
                    <div class="form-group col-6 col-md-4 col-lg-2">
                        <label for="charisma">Charisma</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('charisma') ? 'border-danger' : '' }}" 
                        id="charisma" 
                        min="3" max="18"
                        placeholder="WIS" 
                        name="charisma" 
                        value="{{ old('charisma') }}"
                        required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-4 col-lg-2">
                        <label for="armor">Armor</label>
                        <select class="form-control {{ $errors->has('armor') ? 'border-danger' : '' }}" id="armor" name="armor">
                            <option v-for="armor in profession.armors" :value="armor.id">@{{ armor.name }}</option>
                            {{-- @foreach($options['armors'] as $armor)
                                <option value="{{ $armor->id }}">{{ $armor->name }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-4 col-lg-2" v-for="n in profession.equipmentOptionCount">
                        <label for="armor">Equipment Option @{{ n }}</label>
                        <div class="{{ $errors->has('armor') ? 'border-danger' : '' }}" name="equipment">
                            <div v-for="equipment in profession.equipment" v-if="equipment.option_set == n" class="form-check">
                              <input :class="'form-check-input limited limit-group-' + equipment.option_set" name="equipment[]" type="checkbox" :value="equipment.equipment_id" :id="'option-' + equipment.id" :data-limit="equipment.limit" @change="limit(equipment.option_set, equipment.limit)">
                              <label class="form-check-label" :for="'option-' + equipment.id">
                                @{{ equipmentList[equipment.equipment_id - 1].name }}<span v-if="equipment.limit ==2">*</span>
                              </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-3">
                        <label for="spells">Cantrips</label>
                        <div v-for="spell in spells" v-if="spell.level == 0" class="form-check" @mouseover="spellDescription(spell)">
                          <input class="form-check-input" name="spells[]" type="checkbox" :value="spell.id" :id="'spell-check-' + spell.id">
                          <label class="form-check-label" :for="'spell-check-' + spell.id">
                            @{{ spell.name }}
                          </label>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-3">
                        <label for="spells">First Level Spells</label>
                        <div v-for="spell in spells" v-if="spell.level == 1" class="form-check" @mouseover="spellDescription(spell)">
                          <input class="form-check-input" name="spells[]" type="checkbox" :value="spell.id" :id="'spell-check-' + spell.id">
                          <label class="form-check-label" :for="'spell-check-' + spell.id">
                            @{{ spell.name }}
                          </label>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <p>@{{ spellText }}</p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="personality">Personality</label>
                        <textarea class="form-control" id="personality" rows="3" name="personality"></textarea>    
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="ideals">Ideals</label>
                        <textarea class="form-control" id="ideals" rows="3" name="ideals"></textarea>    
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="bonds">Bonds</label>
                        <textarea class="form-control" id="bonds" rows="3" name="bonds"></textarea>    
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="flaws">Flaws</label>
                        <textarea class="form-control" id="flaws" rows="3" name="flaws"></textarea>    
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="backstory">Backstory</label>
                        <textarea class="form-control" id="backstory" rows="3" name="backstory"></textarea>    
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="appearance">Appearance</label>
                        <textarea class="form-control" id="appearance" rows="3" name="appearance"></textarea>    
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="misc">Misc</label>
                        <textarea class="form-control" id="misc" rows="3" name="misc"></textarea>    
                    </div>
                    <div class="form-group col-12 col-md-6" v-if="languages > 0">
                        <label for="armor">Languages: Select @{{ languages }}</label>
                        <div class="{{ $errors->has('languages') ? 'border-danger' : '' }}">
                            <div v-for="language in languageList" class="form-check">
                              <input class="form-check-input limited limit-group-language" name="languages[]" type="checkbox" :value="language.id" :id="'language-' + language.id" :data-limit="languages" @change="limit(languageLimitGroup, languages)">
                              <label class="form-check-label" :for="'language-' + language.id">
                                @{{ language.name }}
                              </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                <button type="submit" class="btn btn-primary">Create Character</button>
                @include('errors')
            </form>
        </div>
    @endguest
@endsection