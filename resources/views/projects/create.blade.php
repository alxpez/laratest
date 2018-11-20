<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      <title>New Project</title>
        
    </head>
    <body>
        <h1>Create new project</h1>

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
    </body>
</html>
