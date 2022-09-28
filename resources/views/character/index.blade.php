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
                    <div class="row justify-content-center">
                        <p>Languages:
                        @foreach($character->language()->get() as $language)
                            {{ $language->name }}, 
                        @endforeach
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
                            <h3>Equipment</h3>
                            @foreach ($character->equipment()->get() as $equipment)
                                <div class="card mb-1">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-6">{{ $equipment->name }}</div>
                                            <div class="col-6">
                                                <button class="btn btn-primary float-right" data-toggle="collapse" href="#equipment-body-{{ $equipment->id }}" role="button">Show</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body collapse" id="equipment-body-{{ $equipment->id }}">
                                        @if ($equipment->type != 'kit' && $equipment->type != 'magic'&& $equipment->type != 'bag')
                                        <table class="table">
                                            @if ($equipment->style)
                                                <tr>
                                                    <td>Type:</td>
                                                    <td>{{$equipment->type}} {{$equipment->style}}</td>
                                                </tr>
                                            @endif
                                            @if ($equipment->damage)
                                                <tr>
                                                    <td>Damage:</td>
                                                    <td>{{ $equipment->damage }}</td>
                                                </tr>
                                            @endif
                                            @if ($equipment->ammunition_count)
                                                <tr>
                                                    <td>Ammunition:</td>
                                                    <td>{{ $equipment->ammunition_count }} {{ $equipment->ammunition }}{{ $equipment->ammunition_count > 0 ? "s" : "" }}</td>
                                                </tr>
                                            @endif                                
                                        </table>
                                    @endif
                                        <p>{{ $equipment->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                            <?php $cantrips = $character->spell()->where('level', '=', 0)->get(); ?>
                            <h3>Cantrips</h3>
                            @foreach ($cantrips as $spell)
                                <div class="card mb-1">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-6">{{ $spell->name }}</div>
                                            <div class="col-6">
                                                <button class="btn btn-primary float-right" data-toggle="collapse" href="#spell-body-{{ $spell->id }}" role="button">Show</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body collapse" id="spell-body-{{ $spell->id }}">
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
                                </div>
                            @endforeach
                            <?php $firstLevel = $character->spell()->where('level', '=', 1)->get(); ?>
                            <h3 class="mt-3">First Level</h3>
                            @foreach ($firstLevel as $spell)
                                <div class="card mb-1">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-6">{{ $spell->name }}</div>
                                            <div class="col-6">
                                                <button class="btn btn-primary float-right" data-toggle="collapse" href="#spell-body-{{ $spell->id }}" role="button">Show</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body collapse" id="spell-body-{{ $spell->id }}">
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
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3>Personality</h3>
                            <p>{{ $character->personality }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>Ideals</h3>
                            <p>{{ $character->ideals }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>bonds</h3>
                            <p>{{ $character->bonds }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>Flaws</h3>
                            <p>{{ $character->flaws }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3>Backstory</h3>
                            <p>{{ $character->backstory }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>Appearance</h3>
                            <p>{{ $character->appearance }}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3>Misc</h3>
                            <p>{{ $character->misc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection