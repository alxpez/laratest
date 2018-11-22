@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Edit Project  
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
        </div>
      </div>

      @include('errors')
    </div>
  </div>
</div>
@endsection