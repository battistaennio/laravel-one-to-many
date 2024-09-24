@extends('layouts.app')

@section('content')
    @if (session('edit_confirm'))
        <div class="alert alert-success" role="alert">
            {{ session('edit_confirm') }}
        </div>
    @endif


    <h1 class="text-center">
        Dettaglio progetto
        <a class="btn btn-warning" title="Modifica" href="{{ route('admin.projects.edit', $project) }}">
            <i class="fa-solid fa-pen"></i>
        </a>
        <br>
        "<strong>{{ $project->name }}</strong>"
    </h1>

    <div class="row my-5 text-center">
        <div class="col-6">
            <h3>Nome Progetto:</h3>
            <h5>{{ $project->name }}</h5>
        </div>

        <div class="col-6">
            <h3>Slug:</h3>
            <h5>{{ $project->slug }}</h5>
        </div>
    </div>

    <div class="row my-5 text-center">
        <div class="col-6">
            <h3>Argomento principale:</h3>
            <h5>{{ $project->main_topic }}</h5>
        </div>

        <div class="col-6">
            <h3>Link repository:</h3>
            <h5>{{ $project->repo_link }}</h5>
        </div>
    </div>

    <div class="row my-5 text-center">
        <h3>Descrizione:</h3>
        <div class="col">
            <h5>{{ $project->description }}</h5>
        </div>
    </div>

    <div class="col my-5 text-center">
        <a class="btn btn-warning" href="{{ route('admin.projects.index') }}">Torna alla lista</a>
    </div>
@endsection
