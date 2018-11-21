@extends('layout')


@section('content')
    <h1>{{ $project->title }}</h1>

    <p>{{ $project->description }}</p>

    <a href="/projects/{{$project->id}}/edit">Edit</a>
    
    @if ($project->tasks->count())
        <h3>Tasks</h3>
        
        <ul>
            @foreach ($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </ul>
    @endif
@endsection