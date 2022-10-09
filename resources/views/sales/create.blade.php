@extends('layouts.app')

@section('content')

<section id="basic-vertical-layouts">
    <div class="row">
       
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Crear venta de un producto</h4>
                </div>
                <div class="card-body">
                    @include('partials/error-validation')
                    
                    <form action="{{ route('sales.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            
                            
                            <div class="mb-1">
                                <label class="form-label">*Seleccione un producto</label>
                                <select required class="form-select" name="product_id">
                                    <option value="">Seleccione...</option>
                                    @foreach ($products as $product)
                                    <option value='{{ $product->id }}'>{{ $product->name_product }} | {{ $product->reference }} | Precio:  $ {{ $product->price }} | Stock: {{ $product->stock }} únidades disponibles</option>
                                    @endforeach
                                  
                                </select>
                            </div>


                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-primary me-1 waves-effect waves-float waves-light">Comprar</button>
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
