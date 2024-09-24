@extends('layouts.app')

@section('content')
    <h1>New Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <h4>Attenzione!</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome progetto</label>
            <input value="{{ old('name') }}" name="name" type="text"
                class="form-control @error('name') is-invalid @enderror" id="name" placeholder="aggiungi il nome">
            @error('name')
                <small class="text-danger">*{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="main_topic" class="form-label">Argomento principale</label>
            <input value="{{ old('main_topic') }}" name="main_topic" type="text"
                class="form-control @error('main_topic') is-invalid @enderror" id="main_topic"
                placeholder="aggiungi l'argomento principale">
            @error('main_topic')
                <small class="text-danger">*{{ $message }}</small>
            @enderror

        </div>
        <div class="mb-3">
            <label for="repo_link" class="form-label">Link repository</label>

            <div class="input-group">

                <input value="{{ old('repo_link') }}" name="repo_link" type="text"
                    class="form-control input-group @error('repo_link') is-invalid @enderror" id="repo_link"
                    placeholder="aggiungi il link della repository">
            </div>

            @error('repo_link')
                <small class="text-danger">*{{ $message }}</small>
            @enderror

        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="description" placeholder="aggiungi la descrizione">{{ old('description') }}</textarea>
        </div>


        <div class="mb-3">
            <button type="submit" href="#" class="btn btn-success">Invia</button>
            <button type="reset" href="#" class="btn btn-danger">Annulla</button>
        </div>

    </form>
@endsection


@section('titlePage')
    Comics List
@endsection
