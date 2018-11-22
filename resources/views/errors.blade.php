@if ($errors->any())
<div class="card" style="color: red">
    <div class="card-header">Errors</div>

    <div class="card-body">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
    </div>
</div>
@endif