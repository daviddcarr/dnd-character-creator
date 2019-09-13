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
                    <div class="row justify-center mb-3">
                        @foreach ($characters as $character)
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="card">
                                    <?php 
                                    $professionName = App\Profession::find($character->profession)->name;
                                    $raceName = App\Race::find($character->race)->name;
                                    ?>
                                    <img class="card-img-top" src="/img/professions/{{ $character->profession }}.png" alt="{{ $professionName }} Card Image">
                                    <div class="card-body">
                                        <h5 class="card-title text-center mb-0">{{ $character->name }}</h5>
                                        <p class="tiny text-center mb-0">Level {{ $character->level }} {{ $raceName }} {{ $professionName }}</p>
                                        <a href="/character/{{ $character->id }}" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                    <p class="text-center"><a href="{{ url('character/create') }}" class="btn btn-primary btn-round">Create Character</a></p>

                    <p class="text-center">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
