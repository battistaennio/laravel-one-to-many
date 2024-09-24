@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome Progetto</th>
                <th scope="col">Argomento Principale</th>
                <th scope="col">Link Repository</th>
                <th scope="col">Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->main_topic }}</td>
                    <td><a href="{{ $project->repo_link }}">Vai alla repo</a></td>
                    <td>
                        <a class="btn btn-success" title="Dettagli" href="{{ route('admin.projects.show', $project) }}">
                            <i class="fa-solid fa-eye"></i>
                        </a>

                        <a class="btn btn-warning" title="Modifica" href="{{ route('admin.projects.edit', $project) }}">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        @include('admin.partials.delete_form', [
                            'route' => route('admin.projects.destroy', $project),
                            'message' => "Sei sicuro di voler definitivamente eliminare questo progetto? Tutti i dati di $project->name verranno persi.",
                        ])

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $projects->links() }}
    </div>
@endsection
