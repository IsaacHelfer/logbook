@extends('layouts.app')

@section('content')
    <h1>Logbook Settings</h1>

    <div class="row mt-3">
        <!-- Types -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Types
                        <x-action>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Categories
                        <x-action>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
