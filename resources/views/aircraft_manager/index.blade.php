@extends('layouts.app')

@section('content')
    <h1>Aircraft Manager</h1>

    <div class="row mt-3">
        <!-- aircraft -->
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Aircraft
                        <x-action route="aircraft_manager.aircraft.create">
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
                                                        <x:action route="aircraft_manager.aircraft.edit" parameters="{{ $ac->getKey() }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </x:action>
                                                    </div>
                                                    <div>
                                                        <form action="{{ route('aircraft_manager.aircraft.destroy', $ac->getKey()) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <x:action class="trash">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </x:action>
                                                        </form>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Makes
                        <x-action>
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
                                                    <x:action route="" parameters="">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </x:action>
                                                </div>
                                                <div>
                                                    <form action="" method="POST" id="form-delete-entries">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x:action class="data-delete">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </x:action>
                                                    </form>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Models
                        <x-action>
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
                                                    <x:action route="" parameters="">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </x:action>
                                                </div>
                                                <div>
                                                    <form action="" method="POST" id="form-delete-entries">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x:action class="data-delete">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </x:action>
                                                    </form>
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
    </div>

    <script>
        $('.trash').on('click', function(e) {
            e.preventDefault();
            $(this).closest('form').submit();
        })
    </script>
@endsection
