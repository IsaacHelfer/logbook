@extends('layouts.app')

@section('content')
    <x:card>
        <x:card.header>
            <div class="col">
                <h1>Edit Flight Category</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('logbook.settings.index') }}">Logbook Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Flight Category</li>
                </ol>
            </nav>
        </x:card.header>

        <x:card.body>
            <form action="{{ route('logbook.settings.categories.update', $category->getKey()) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="row">
                    <x:input type="text" id="category" class="col-md-12 mb-3" value="{{ $category->category }}" required />

                    <x:form-submit route="logbook.settings.index" value="Save" />
                </div>
            </form>
        </x:card-body>
    </x:card>
@endsection
