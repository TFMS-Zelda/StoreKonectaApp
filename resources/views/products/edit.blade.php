@extends('layouts.app')

@section('content')

<section id="basic-vertical-layouts">
    <div class="row">
       
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editar producto</h4>
                </div>
                <div class="card-body">
                    @include('partials/error-validation')
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">*Nombre del producto</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather='book'></i></span>
                                        <input type="text" required class="form-control" name="name_product" value="{{ $product->name_product }}" placeholder="Ingrese un nombre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">*Referencia</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather='bookmark'></i></span>
                                        <input type="text" required  class="form-control" name="reference" value="{{ $product->reference }}" placeholder="Ingrese una referencia">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">*Precio</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather='dollar-sign'></i></span>
                                        <input type="number"  required class="form-control" name="price" value="{{ $product->price }}" placeholder="Ingrese una precio">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-label">*Categoría</label>
                                <select required class="form-select" name="category_id">
                                    <option  value="{{ $product->category_id }}">{{ $product->category_id }}</option>

                                    <option value="">Seleccione una categoría...</option>
                                    @foreach ($categories as $category)
                                    <option value='{{ $product->category->id }}'>{{ $product->name_category }}</option>
                                    @endforeach
                                  
                                </select>
                            </div>

                            

                            <div class="mb-1">
                                <label class="form-label">*Fecha de creación</label>
                                <input type="date" required class="form-control" placeholder="Ingrese la fecha de creación"  name="creation_date" value="{{ $product->creation_date }}" required>

                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label">*Stock</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather='dollar-sign'></i></span>
                                        <input type="number"  required class="form-control" name="stock" value="{{ $product->stock }}" placeholder="Ingrese la cantidad de stock">
                                    </div>
                                </div>
                            </div>
                            
                          
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-primary me-1 waves-effect waves-float waves-light">Editar</button>
                                <a href="{{ route('products.index') }}" class="btn btn-outline-danger waves-effect">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
