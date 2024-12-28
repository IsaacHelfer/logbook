@extends('layouts.app')

@section('content')
    <h1>Logbook Settings</h1>

    <div class="row mt-3">
        <!-- aircraft -->
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Aircraft
                        <x-action route="logbook.settings.aircraft.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <div class="table-responsive mb-3">
                        <table class="table table-hover table-striped mt-3">
                            <thead>
                            <tr>
                                <th scope="col">Identifier</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($aircraft))
                                @foreach($aircraft as $ac)
                                    <tr>
                                        <td class="text-truncate">{{$ac->identifier}}</td>
                                        <td>
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
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- makes -->
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Makes
                        <x-action route="logbook.settings.makes.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped mt-3">
                            <thead>
                            <tr>
                                <th scope="col">Make</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($makes))
                                @foreach($makes as $make)
                                    <tr>
                                        <td class="text-truncate">{{$make->make}}</td>
                                        <td>
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
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- models -->
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Models
                        <x-action route="logbook.settings.models.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped mt-3">
                            <thead>
                            <tr>
                                <th scope="col">Model</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($models))
                                @foreach($models as $model)
                                    <tr>
                                        <td class="text-truncate">{{$model->model}}</td>
                                        <td>
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
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category -->
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Categories
                        <x-action route="logbook.settings.models.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped mt-3">
                            <thead>
                            <tr>
                                <th scope="col">Category</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @if(!empty($models))--}}
{{--                                @foreach($models as $model)--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-truncate">{{$model->model}}</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex justify-content-end gap-2">--}}
{{--                                                <div>--}}
{{--                                                    <x:action route="logbook.settings.models.edit" parameters="{{ $model->getKey() }}">--}}
{{--                                                        <i class="fa-solid fa-pen-to-square"></i>--}}
{{--                                                    </x:action>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <x:action action="{{ route('logbook.settings.models.destroy', $model->getKey()) }}" delete />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Type -->
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Types
                        <x-action route="logbook.settings.models.create" tooltip="Create">
                            <i class="fa-solid fa-square-plus fa-xs"></i>
                        </x-action>
                    </h5>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped mt-3">
                            <thead>
                            <tr>
                                <th scope="col">Type</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @if(!empty($models))--}}
{{--                                @foreach($models as $model)--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-truncate">{{$model->model}}</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex justify-content-end gap-2">--}}
{{--                                                <div>--}}
{{--                                                    <x:action route="logbook.settings.models.edit" parameters="{{ $model->getKey() }}">--}}
{{--                                                        <i class="fa-solid fa-pen-to-square"></i>--}}
{{--                                                    </x:action>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <x:action action="{{ route('logbook.settings.models.destroy', $model->getKey()) }}" delete />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
