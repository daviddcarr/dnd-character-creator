@extends('layouts.app')

@section('content')
    <div class="container">
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
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="race">Race</label>
                    <select multiple class="form-control" id="race">
                      @foreach($options['races'] as $race)
                          <option value="{{ $race->id }}">{{ $race->name }}</option>
                      @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="profession">Professions</label>
                    <select multiple class="form-control" id="profession">
                      @foreach($options['professions'] as $profession)
                          <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                      @endforeach
                    </select>
                  </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
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
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="alignment">Alignment</label>
                    <select multiple class="form-control" id="alignment">
                      <option value="LG">Lawful Good</option>
                      <option value="LN">Lawful Neutral</option>
                      <option value="LE">Lawful Evil</option>
                      <option value="NG">Neutral Good</option>
                      <option value="TN">True Neutral</option>
                      <option value="NE">Neutral Evil</option>
                      <option value="CG">Chaotic Good</option>
                      <option value="CN">Chaotic Neutral</option>
                      <option value="CE">Chaotic Evil</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add Project</button>
            {{-- @include('errors') --}}
        </form>
    </div>
@endsection