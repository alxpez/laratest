@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">New Project</div>

        <div class="card-body">
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
        </div>
      </div>

      @include('errors')
    </div>
  </div>
</div>
@endsection
