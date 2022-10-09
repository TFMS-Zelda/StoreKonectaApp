@extends('layouts.app')

@section('content')

<section id="basic-vertical-layouts">
    <div class="row">
       
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Crear categoría</h4>
                </div>
                <div class="card-body">
                    @include('partials/error-validation')
                    
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">*Nombre de la categoría</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather='book'></i></span>
                                        <input type="text" required class="form-control" name="name_category" value="{{ old('name_category') }}" placeholder="Ingrese un nombre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">*Descripción de la categoría</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather='bookmark'></i></span>
                                        <input type="text"  required class="form-control" name="description_category" value="{{ old('description_category') }}" placeholder="Descripción de la categoría">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-label">*Estado</label>
                                <select class="form-select"  required name="status">
                                    <option selected="">Seleccione...</option>
                                    <option value='Activo'>Activo</option>
                                    <option value="No activo">No activo</option>
                                </select>
                            </div>
                           
                            
                          
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-primary me-1 waves-effect waves-float waves-light">Guardar</button>
                                <a href="{{ route('categories.index') }}" class="btn btn-outline-danger waves-effect">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
