@extends('layouts.app')

@section('content')
    <div class="container">
        @guest
            <h1>You must register to create a character</h1>
        @else
            <h1>Edit {{ $options['character']->name }}</h1>
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
                        value="{{ $options['character']->name }}"
                        required>
                    </div>
                    <div class="form-group col-6 col-md-2 col-lg-1">
                        <label for="title">Age</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('age') ? 'border-danger' : '' }}" 
                        id="age" 
                        placeholder="Age" 
                        name="age" 
                        value="{{ $options['character']->age }}"
                        required>
                    </div>
                    <div class="form-group col-6 col-md-2 col-lg-1">
                        <label for="level">Level</label>
                        <input 
                        type="number" 
                        class="form-control {{ $errors->has('level') ? 'border-danger' : '' }}" 
                        id="level" 
                        placeholder="Level" 
                        name="level" 
                        value="{{ $options['character']->level }}"
                        required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="race">Race</label>
                        <select multiple class="form-control {{ $errors->has('race') ? 'border-danger' : '' }}" id="race" name="race">
                          @foreach($options['races'] as $race)
                              <option {{ $options['character']->race == $race->id ? 'selected' : '' }} value="{{ $race->id }}">{{ $race->name }}</option>
                          @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group col-12 col-md-6">
                        <label for="profession">Professions</label>
                        <select multiple class="form-control {{ $errors->has('profession') ? 'border-danger' : '' }}" id="profession" name="profession">
                          @foreach($options['professions'] as $profession)
                              <option {{ $options['character']->profession == $profession->id ? 'selected' : '' }} value="{{ $profession->id }}">{{ $profession->name }}</option>
                          @endforeach
                        </select>
                      </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="alignment">Alignment</label>
                        <select multiple class="form-control {{ $errors->has('alignment') ? 'border-danger' : '' }}" id="alignment" name="alignment">
                            @foreach($options['alignments'] as $alignment)
                                <option {{ $options['character']->alignment == $alignment->id ? 'selected' : '' }} value="{{ $alignment->id }}">{{ $alignment->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="background">Background</label>
                        <select multiple class="form-control {{ $errors->has('background') ? 'border-danger' : '' }}" id="background" name="background">
                            @foreach($options['backgrounds'] as $background)
                                <option {{ $options['character']->background == $background->id ? 'selected' : '' }} value="{{ $background->id }}">{{ $background->name }}</option>
                            @endforeach
                        </select>
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
                        value="{{ $options['character']->strength }}"
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
                        value="{{ $options['character']->dexterity }}"
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
                        value="{{ $options['character']->constitution }}"
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
                        value="{{ $options['character']->intelligence }}"
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
                        value="{{ $options['character']->wisdom }}"
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
                        value="{{ $options['character']->charisma }}"
                        required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
                @include('errors')
            </form>
        </div>
    @endguest
@endsection