@extends('layout')


@section('content')

  <h1>Edit Project</h1>

  <form method="POST" action="/projects/{{ $project->id }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div>
      <input type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
    </div>

    <div>
      <textarea name="description" id="description" placeholder="Project description">
        {{ $project->description }}
      </textarea>
    </div>

    <div>
      <button type="submit">Update</button>
    </div>
  </form>

  <form method="POST" action="/projects/{{ $project->id }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
      <button type="submit" style="background-color: red">Delete</button>
    </div>
  </form>

@endsection