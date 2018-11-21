@extends('layout')


@section('content')
    <h1>{{ $project->title }}</h1>

    <p>{{ $project->description }}</p>

    <a href="/projects/{{ $project->id }}/edit">Edit</a>
    
    {{-- Display if project has at least 1 task --}}
    @if ($project->tasks->count())
        <div style="border: 1px solid #eee">
            <ul>
                @foreach ($project->tasks as $task)
                    <li>
                        <form method="POST" action="/tasks/{{ $task->id }}">
                            @csrf
                            @method('PATCH')
    
                            <label for="completed" style="{{ $task->completed ? 'text-decoration: line-through' : '' }}">
                                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                {{ $task->description }}
                            </label>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif


    <div style="border: 1px solid #eee">
        <form action="/projects/{{ $project->id }}/tasks" method="POST">
            @csrf

            <input type="text" name="description" placeholder="Task description">
            <button type="submit">Add task</button>
        </form>
    </div>

    @include('errors')
@endsection