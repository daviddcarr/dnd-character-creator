@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($characters)
                    <ul>
                        @foreach ($characters as $character)
                        <li>
                            <a href="/character/{{ $character->id }}">{{ $character->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    <p class="text-center"><a href="{{ url('character/create') }}" class="btn btn-primary btn-round">Create Character</a></p>

                    <p class="text-center">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
