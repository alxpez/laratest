@extends('layout')


@section('content')

  <h1>Edit Project</h1>

  <form method="POST" action="/projects/{{ $project->id }}">
    @csrf
    @method('PATCH')

    <div>
      <input type="text" name="title" placeholder="Project title" value="{{ $project->title }}" style="{{ $errors->has('title') ? 'border-color: red' : ''}}" required>
    </div>

    <div>
      <textarea name="description" id="description" placeholder="Project description" style="{{ $errors->has('description') ? 'border-color: red' : ''}}" required>
        {{ $project->description }}
      </textarea>
    </div>

    <div>
      <button type="submit">Update</button>
    </div>
  </form>

  <form method="POST" action="/projects/{{ $project->id }}">
    @csrf
    @method('DELETE')

    <div>
      <button type="submit" style="background-color: red">Delete</button>
    </div>
  </form>
  
  @include('errors')

@endsection