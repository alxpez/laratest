<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      <title>Projects</title>
        
    </head>
    <body>
        <h1>Projects</h1>

        @foreach ($projects as $project)
            <li>{{ $project->title }} - {{ $project->description }}</li>
        @endforeach
    </body>
</html>
