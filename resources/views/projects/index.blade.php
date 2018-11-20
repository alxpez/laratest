@extends('layout')


@section('content')

    <h1>Projects</h1>

    <button>
        <a href="/projects/create">New project</a>
    </button>

    <br>
    <br>

    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">{{ $project->title }}</a>
            </li>
        @endforeach
    </ul>

@endsection