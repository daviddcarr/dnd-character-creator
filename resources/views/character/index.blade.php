@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card p-3">
                    <h1 class="text-center">{{ $character->name }}</h1>
                    <hr>
                    <?php
                        $race = App\Race::find($character->race);
                        $profession = App\Profession::find($character->profession);
                    ?>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4">
                            <p class="text-center">Level {{ $character->level }}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <p class="text-center">{{ $race->name }}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <p class="text-center">{{ $profession->name }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="text-center">Background: {{ App\Background::find($character->background)->name }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="text-center">Alignment: {{ App\Alignment::find($character->alignment)->name }}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <p class="text-center">HP: {{ $character->current_hp }} / {{ $character->max_hp }}</p>
                        </div>
                        <div class="col-12 col-md-4">
                            <p class="text-center">Hit Dice: {{ $character->level }}d{{ $profession->hit_dice }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <p class="text-center">AC: {{ $character->ArmorClass() }}
                        </div>
                        <div class="col-6">
                            <p class="text-center">Initiative: {{ modifier($character->dexterity) }}
                        </div>
                    </div>
                    <hr>
                    @if (!is_null($profession->spellcasting_ability))
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <p class="text-center">Spellcasting Ability: {{ $profession->spellcasting_ability }}</p>
                            </div>
                            <div class="col-4">
                                <p class="text-center">Spell Save DC: {{ 8 + modifierAsInt($character[$profession->spellcasting_ability]) + $character->ProficiencyBonus() }}
                            </div>
                            <div class="col-4">
                                <p class="text-center">Spell Attack Modifier: {{ modifierAsInt($character[$profession->spellcasting_ability]) + $character->ProficiencyBonus() }}</p>
                            </div>
                        </div>
                        <hr>
                    @endif
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <table class="table table-striped">
                                <tr>
                                    <td class="text-center">
                                        Strength
                                        <br />
                                        {{ $character->strength }} ({{ modifier($character->strength) }})
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        Dexterity
                                        <br />
                                        {{ $character->dexterity }} ({{ modifier($character->dexterity) }})
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        Constitution
                                        <br />
                                        {{ $character->constitution }} ({{ modifier($character->constitution) }})
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        Intelligence
                                        <br />
                                        {{ $character->intelligence }} ({{ modifier($character->intelligence) }})
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        Wisdom
                                        <br />
                                        {{ $character->wisdom }} ({{ modifier($character->wisdom) }})
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        Charisma
                                        <br />
                                        {{ $character->charisma }} ({{ modifier($character->charisma) }})
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-4">
                            <table class="table table-striped">
                                <tr>
                                    <td>Acrobatics</td>
                                    <td>{{ modifier($character->dexterity) }}</td>
                                </tr>
                                <tr>
                                    <td>Animal Handling</td>
                                    <td>{{ modifier($character->wisdom) }}</td>
                                </tr>
                                <tr>
                                    <td>Arcana</td>
                                    <td>{{ modifier($character->intelligence) }}</td>
                                </tr>
                                <tr>
                                    <td>Athletics</td>
                                    <td>{{ modifier($character->strength) }}</td>
                                </tr>
                                <tr>
                                    <td>Deception</td>
                                    <td>{{ modifier($character->charisma) }}</td>
                                </tr>
                                <tr>
                                    <td>History</td>
                                    <td>{{ modifier($character->intelligence) }}</td>
                                </tr>
                                <tr>
                                    <td>Insight</td>
                                    <td>{{ modifier($character->wisdom) }}</td>
                                </tr>
                                <tr>
                                    <td>Intimidation</td>
                                    <td>{{ modifier($character->charisma) }}</td>
                                </tr>
                                <tr>
                                    <td>Investigation</td>
                                    <td>{{ modifier($character->intelligence) }}</td>
                                </tr>
                                <tr>
                                    <td>Medicine</td>
                                    <td>{{ modifier($character->wisdom) }}</td>
                                </tr>
                                <tr>
                                    <td>Nature</td>
                                    <td>{{ modifier($character->intelligence) }}</td>
                                </tr>
                                <tr>
                                    <td>Perception</td>
                                    <td>{{ modifier($character->wisdom) }}</td>
                                </tr>
                                <tr>
                                    <td>Performance</td>
                                    <td>{{ modifier($character->charisma) }}</td>
                                </tr>
                                <tr>
                                    <td>Persuasion</td>
                                    <td>{{ modifier($character->charisma) }}</td>
                                </tr>
                                <tr>
                                    <td>Religion</td>
                                    <td>{{ modifier($character->intelligence) }}</td>
                                </tr>
                                <tr>
                                    <td>Slight of Hand</td>
                                    <td>{{ modifier($character->dexterity) }}</td>
                                </tr>
                                <tr>
                                    <td>Stealth</td>
                                    <td>{{ modifier($character->dexterity) }}</td>
                                </tr>
                                <tr>
                                    <td>Survival</td>
                                    <td>{{ modifier($character->wisdom) }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php $spells = $character->spell()->get(); ?>
                            @foreach ($spells as $spell)
                                <div class="card p-2 mb-1">
                                    <h5>{{ $spell->name }}</h5>
                                    <hr>
                                    <table class="table">
                                        <tr>
                                            <td>School:</td>
                                            <td>{{ $spell->school }}</td>
                                        </tr>
                                        <tr>
                                            <td>Casting Time:</td>
                                            <td>{{ $spell->casting_time }}</td>
                                        </tr>
                                        <tr>
                                            <td>Range:</td>
                                            <td>{{ $spell->range }}</td>
                                        </tr>
                                        <tr>
                                            <td>Duration:</td>
                                            <td>{{ $spell->duration }}</td>
                                        </tr>
                                        <tr>
                                            <td>Concentration:</td>
                                            <td>{{ $spell->concentration ? 'Yes' : 'No' }}</td>
                                        </tr>
                                    </table>
                                    <p>{{ $spell->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection