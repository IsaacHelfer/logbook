@extends('layouts.app')

@section('content')
    <h1>Aircraft Manager</h1>

    <div class="row mt-3">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aircraft</h5>

                    <div class="table-responsive">
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
                                                        <x:action route="" parameters="{{ $ac->getKey() }}">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </x:action>
                                                    </div>
                                                    <div>
                                                        <x:action route="" parameters="{{ $ac->getKey() }}">
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Makes</h5>

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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </x:action>
                                                </div>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Models</h5>

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
                                                        <i class="fa-solid fa-eye"></i>
                                                    </x:action>
                                                </div>
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
@endsection
