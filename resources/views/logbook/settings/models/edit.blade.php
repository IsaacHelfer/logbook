@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <div class="card-header">
            <div class="col">
                <h1>Edit Aircraft Model</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('logbook.settings.index') }}">Aircraft Manager</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Aircraft Model</li>
                </ol>
            </nav>
        </div>

        <div class="card-body">
            <form action="{{ route('logbook.settings.models.update', $model->getKey()) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="row">
                    <x:input type="text" id="model" class="col-md-12 mb-3" value="{{ $model->model }}" required />

                    <div class="col-md-6 offset-md-6 text-end mt-3">
                        <a href="{{ route('logbook.settings.index') }}" class="btn btn-outline-secondary btn-md">Back</a>
                        <input type="submit" value="Save" class="btn btn-success ms-2 btn-md" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection