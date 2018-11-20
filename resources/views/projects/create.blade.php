@extends('layout')


@section('content')

  <h1>Create New Project</h1>

  <form method="POST" action="/projects">
    @csrf

    <div>
      <input type="text" name="title" placeholder="Project title" style="{{ $errors->has('title') ? 'border-color: red' : ''}}" value="{{ old('title') }}" required>
    </div>

    <div>
      <textarea name="description" id="description" placeholder="Project description" style="{{ $errors->has('description') ? 'border-color: red' : ''}}" required>
          {{ old('description') }}
      </textarea>
    </div>

    <div>
      <button type="submit">Create</button>
    </div>
  </form>

  @if ($errors->any())
    <div>
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

@endsection
