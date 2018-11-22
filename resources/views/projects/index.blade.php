@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Projects</h1>
            <div class="card">
                <div class="card-header">
                    <a href="/projects/create">New project</a>
                </div>

                <div class="card-body">
                    <ul>
                        @foreach ($projects as $project)
                            <li>
                                <a href="/projects/{{$project->id}}">{{ $project->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection