@extends('layout')


@section('content')

    <h1>Projects</h1>

    <button>
        <a href="/projects/create">New project</a>
    </button>

    <br>
    <br>

    @foreach ($projects as $project)
        <li><a href="/projects/{{$project->id}}/edit">{{ $project->title }} - {{ $project->description }}</a></li>
    @endforeach

@endsection