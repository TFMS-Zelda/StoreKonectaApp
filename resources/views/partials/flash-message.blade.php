@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
    <h4 class="alert-heading">Exitoso</h4>
    <div class="alert-body">
       {{ $message }}
    </div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Error</h4>
    <div class="alert-body">
       {{ $message }}
    </div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning" role="alert">
    <h4 class="alert-heading">Atención</h4>
    <div class="alert-body">
       {{ $message }}
    </div>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info" role="alert">
    <h4 class="alert-heading">Información</h4>
    <div class="alert-body">
       {{ $message }}
    </div>
</div>
@endif

@if ($errors->any())
<div class="alert alert-warning" role="alert">
    <h4 class="alert-heading">Atención</h4>
    <div class="alert-body">
       ¡Observe el siguiente mensaje del sistema!
    </div>
</div>
@endif