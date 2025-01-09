@extends('layouts.app')

@section('content')
    <h1>Logbook Settings</h1>

    <div class="row mt-3">
        <!-- aircraft -->
        <div class="col-md-12 mb-3">
            <x:card.index>
                <x:card.body>
                    <h5 class="card-title">
                        Aircraft
                        <x-action route="logbook.settings.aircraft.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <x:table.index>
                        <x:table.head>
                            <x:table.record>
                                <x:table.header>Make</x:table.header>
                                <x:table.header>Model</x:table.header>
                                <x:table.header>Identifier</x:table.header>
                            </x:table.record>
                        </x:table.head>
                        <x:table.body>
                            @if(!empty($aircraft))
                                @foreach($aircraft as $ac)
                                    <x:table.record>
                                        <x:table.data class="text-truncate">
                                            {{ $ac->make->make }}
                                        </x:table.data>
                                        <x:table.data class="text-truncate">
                                            {{ $ac->model->model }}
                                        </x:table.data>
                                        <x:table.data class="text-truncate">
                                            {{ $ac->identifier }}
                                        </x:table.data>
                                        <x:table.data>
                                            <div class="d-flex justify-content-end gap-2">
                                                <div>
                                                    <x:action route="logbook.settings.aircraft.edit" parameters="{{ $ac->getKey() }}" tooltip="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </x:action>
                                                </div>
                                                <div>
                                                    <x:action action="{{ route('logbook.settings.aircraft.destroy', $ac->getKey()) }}" delete tooltip="Delete" />
                                                </div>
                                            </div>
                                        </x:table.data>
                                    </x:table.record>
                                @endforeach
                            @endif
                        </x:table.body>
                    </x:table.index>
                </x:card.body>
            </x:card.index>
        </div>
        <!-- makes -->
        <div class="col-md-6 mb-3">
            <x:card.index>
                <x:card.body>
                    <h5 class="card-title">
                        Makes
                        <x-action route="logbook.settings.makes.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <x:table.index>
                        <x:table.head>
                            <x:table.record>
                                <x:table.header>Make</x:table.header>
                            </x:table.record>
                        </x:table.head>
                        <x:table.body>
                            @if(!empty($makes))
                                @foreach($makes as $make)
                                    <x:table.record>
                                        <x:table.data class="text-truncate">
                                            {{ $make->make }}
                                        </x:table.data>
                                        <x:table.data>
                                            <div class="d-flex justify-content-end gap-2">
                                                <div>
                                                    <x:action route="logbook.settings.makes.edit" parameters="{{ $make->getKey() }}" tooltip="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </x:action>
                                                </div>
                                                <div>
                                                    <x:action action="{{ route('logbook.settings.makes.destroy', $make->getKey()) }}" delete tooltip="Delete" />
                                                </div>
                                            </div>
                                        </x:table.data>
                                    </x:table.record>
                                @endforeach
                            @endif
                        </x:table.body>
                    </x:table.index>
                </x:card.body>
            </x:card.index>
        </div>
        <!-- models -->
        <div class="col-md-6 mb-3">
            <x:card.index>
                <x:card.body>
                    <h5 class="card-title">
                        Models
                        <x-action route="logbook.settings.models.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <x:table.index>
                        <x:table.head>
                            <x:table.record>
                                <x:table.header>Model</x:table.header>
                            </x:table.record>
                        </x:table.head>
                        <x:table.body>
                            @if(!empty($models))
                                @foreach($models as $model)
                                    <x:table.record>
                                        <x:table.data class="text-truncate">
                                            {{ $model->model }}
                                        </x:table.data>
                                        <x:table.data>
                                            <div class="d-flex justify-content-end gap-2">
                                                <div>
                                                    <x:action route="logbook.settings.models.edit" parameters="{{ $model->getKey() }}" tooltip="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </x:action>
                                                </div>
                                                <div>
                                                    <x:action action="{{ route('logbook.settings.models.destroy', $model->getKey()) }}" delete tooltip="Delete" />
                                                </div>
                                            </div>
                                        </x:table.data>
                                    </x:table.record>
                                @endforeach
                            @endif
                        </x:table.body>
                    </x:table.index>
                </x:card.body>
            </x:card.index>
        </div>
        <!-- Category -->
        <div class="col-md-6 mb-3">
            <x:card.index>
                <x:card.body>
                    <h5 class="card-title">
                        Categories
                        <x-action route="logbook.settings.categories.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <x:table.index>
                        <x:table.head>
                            <x:table.record>
                                <x:table.header>Category</x:table.header>
                            </x:table.record>
                        </x:table.head>
                        <x:table.body>
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    <x:table.record>
                                        <x:table.data class="text-truncate">
                                            {{ $category->category }}
                                        </x:table.data>
                                        <x:table.data>
                                            <div class="d-flex justify-content-end gap-2">
                                                <div>
                                                    <x:action route="logbook.settings.categories.edit" parameters="{{ $category->getKey() }}" tooltip="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </x:action>
                                                </div>
                                                <div>
                                                    <x:action action="{{ route('logbook.settings.categories.destroy', $category->getKey()) }}" delete tooltip="Delete" />
                                                </div>
                                            </div>
                                        </x:table.data>
                                    </x:table.record>
                                @endforeach
                            @endif
                        </x:table.body>
                    </x:table.index>
                </x:card.body>
            </x:card.index>
        </div>
        <!-- Type -->
        <div class="col-md-6 mb-3">
            <x:card.index>
                <x:card.body>
                    <h5 class="card-title">
                        Types
                        <x-action route="logbook.settings.types.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <x:table.index>
                        <x:table.head>
                            <x:table.record>
                                <x:table.header>Type</x:table.header>
                            </x:table.record>
                        </x:table.head>
                        <x:table.body>
                            @if(!empty($types))
                                @foreach($types as $type)
                                    <x:table.record>
                                        <x:table.data class="text-truncate">
                                            {{ $type->type }}
                                        </x:table.data>
                                        <x:table.data>
                                            <div class="d-flex justify-content-end gap-2">
                                                <div>
                                                    <x:action route="logbook.settings.types.edit" parameters="{{ $type->getKey() }}" tooltip="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </x:action>
                                                </div>
                                                <div>
                                                    <x:action action="{{ route('logbook.settings.types.destroy', $type->getKey()) }}" delete tooltip="Delete" />
                                                </div>
                                            </div>
                                        </x:table.data>
                                    </x:table.record>
                                @endforeach
                            @endif
                        </x:table.body>
                    </x:table.index>
                </x:card.body>
            </x:card.index>
        </div>
    </div>
@endsection
