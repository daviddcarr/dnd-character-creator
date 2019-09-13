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
                    <div class="form-group col-12 col-md-8 col-lg-10">
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
                    <div class="form-group col-12 col-md-2 col-lg-1">
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
                    <div class="form-group col-12 col-md-2 col-lg-1">
                        <label for="level">Level</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('level') ? 'border-danger' : '' }}" 
                        id="level" 
                        placeholder="Level" 
                        name="level" 
                        value="1"
                        required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6 col-lg-3">
                        <label for="race">Race</label>
                        <select class="form-control {{ $errors->has('race') ? 'border-danger' : '' }}" 
                            id="race" 
                            name="race" 
                            v-model="race">
                          @foreach($options['races'] as $race)
                              <option value="{{ $race->id }}">{{ $race->name }}</option>
                          @endforeach
                        </select>
                        <div class="card mt-2">
                            <img src="/img/placeholder.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Placeholder</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Sit amet malesuada nisi odio vel arcu.</p>
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
                                <p>@{{ profession.description }}</p>
                            </div>
                        </div>
                      </div>
                      <div class="form-group col-12 col-md-6 col-lg-3">
                        <label for="alignment">Alignment</label>
                        <select class="form-control {{ $errors->has('alignment') ? 'border-danger' : '' }}" id="alignment" name="alignment">
                            @foreach($options['alignments'] as $alignment)
                                <option value="{{ $alignment->id }}">{{ $alignment->name }}</option>
                            @endforeach
                        </select>
                        <div class="card mt-2">
                            <img src="/img/placeholder.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Placeholder</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Sit amet malesuada nisi odio vel arcu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6 col-lg-3">
                        <label for="background">Background</label>
                        <select class="form-control {{ $errors->has('background') ? 'border-danger' : '' }}" id="background" name="background">
                            @foreach($options['backgrounds'] as $background)
                                <option value="{{ $background->id }}">{{ $background->name }}</option>
                            @endforeach
                        </select>
                        <div class="card mt-2">
                            <img src="/img/placeholder.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Placeholder</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Sit amet malesuada nisi odio vel arcu.</p>
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
                            @foreach($options['armors'] as $armor)
                                <option value="{{ $armor->id }}">{{ $armor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="spells">Cantrips</label>
                        <select multiple="multiple" class="ms-searchable form-control {{ $errors->has('spells') ? 'border-danger' : '' }}" id="spells" name="cantrips[]">
                            {{-- <option v-for="spell in spells" :value="spell.id">@{{spell.name}}</option> --}}
                            @foreach($options['cantrips'] as $spell)
                                <option value="{{ $spell->id }}">{{ $spell->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="spells">First Level Spells</label>
                        <select multiple="multiple" class="ms-searchable form-control {{ $errors->has('spells') ? 'border-danger' : '' }}" id="spells" name="spells_first[]">
                            @foreach($options['spells_first'] as $spell)
                                <option value="{{ $spell->id }}">{{ $spell->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Create Character</button>
                @include('errors')
            </form>
        </div>
    @endguest
@endsection