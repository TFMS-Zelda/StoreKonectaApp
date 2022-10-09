@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Error de validación</h4>
    <div class="alert-body">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif