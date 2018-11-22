@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $project->title }}</h1>
            <div class="card">
                <div class="card-header">
                    <a href="/projects/{{ $project->id }}/edit">Edit</a>
                    <div style="display: inline-block">
                        <form method="POST" action="/projects/{{ $project->id }}">
                            @csrf
                            @method('DELETE')
                        
                            <div>
                                <button type="submit" style="color: white; background-color: red">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <p>{{ $project->description }}</p>
                </div>
            </div>

            @if ($project->tasks->count())
                <div class="card">
                    <div class="card-header">Tasks</div>
    
                    <div class="card-body">
                        
                        <div>
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
                    </div>
                </div>
            @endif


            <div class="card">
                <div class="card-body">
                    <div>
                        <form action="/projects/{{ $project->id }}/tasks" method="POST">
                            @csrf
                
                            <input type="text" name="description" placeholder="Task description">
                            <button type="submit">Add task</button>
                        </form>
                    </div>
                </div>
            </div>
            
            @include('errors')
        </div>
    </div>
</div>
@endsection