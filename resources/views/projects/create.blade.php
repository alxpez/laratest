@extends('layout')


@section('content')

  <h1>Create New Project</h1>

  <form method="POST" action="/projects">
    {{ csrf_field() }}

    <div>
      <input type="text" name="title" placeholder="Project title">
    </div>

    <div>
      <textarea name="description" id="description" placeholder="Project description"></textarea>
    </div>

    <div>
      <button type="submit">Create</button>
    </div>
  </form>

@endsection
