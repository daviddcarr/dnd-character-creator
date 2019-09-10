@extends('layouts.app')

@section('content')
    <h1>Create A Character</h1>
    
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-12">
                <label for="title">Name</label>
                <input 
                type="text" 
                class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" 
                id="name" 
                placeholder="name" 
                name="name" 
                value="{{ old('name') }}"
                required>
            </div>
            <div class="form-group">
                <label for="race">Race</label>
                <select multiple class="form-control" id="race">
                  <option value="aarokocra">Aarakocra</option>
                  <option value="aasimar">Aasimar</option>
                  <option value="bugbear">Bugbear</option>
                  <option value="centaur">Centaur</option>
                  <option value="changeling">Changeling</option>
                  <option value="dragonborn">Dragonborn</option>
                  <option value="dwarf">Dwarf</option>
                  <option value="elf">Elf</option>
                  <option value="feral-tiefling">Feral Tiefling</option>
                  <option value="firbolg">Firbolg</option>
                  <option value="genasi">Genasi</option>
                  <option value="gith">Gith</option>
                  <option value="gnome">Gnome</option>
                  <option value="goblin">Goblin</option>
                  <option value="goliath">Goliath</option>
                  <option value="half-elf">Half-Elf</option>
                  <option value="halfling">Halfling</option>
                  <option value="half-orc">Half-Orc</option>
                  <option value="hobgoblin">Hobgoblin</option>
                  <option value="human">Human</option>
                  <option value="kalashtar">Kalashtar</option>
                  <option value="kenku">Kenku</option>
                  <option value="kobold">Kobold</option>
                  <option value="lizardfolk">Lizardfolk</option>
                  <option value="loxodon">Loxodon</option>
                  <option value="minotaur">Minotaur</option>
                  <option value="orc">Orc</option>
                  <option value="shifter">Shifter</option>
                  <option value="simic-hybrid">Simic Hybrid</option>
                  <option value="tabaxi">Tabaxi</option>
                  <option value="tiefling">Tiefling</option>
                  <option value="tortle">Tortle</option>
                  <option value="triton">Triton</option>
                  <option value="vedalkan">Vedalkan</option>
                  <option value="warforged">Warforged</option>
                  <option value="yuan-ti">Yuan-Ti Pureblood</option>
                </select>
              </div>

        </div>
        <button type="submit" class="btn btn-primary">Add Project</button>
        {{-- @include('errors') --}}
    </form>
@endsection