@extends('layouts.app')

@section('content')
<div class="row" id="table-head">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">🚀 Ventas de productos</h4>
            </div>
           
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Id:</th>
                            <th>Nombre del producto:</th>
                            <th>Referencia:</th>
                            <th>Precio:</th>
                            <th>Categoría:</th>
                            <th>Fecha de venta:</th>
                            <th>Acciones:</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($productSales as $sale)
                        <tr>
                            <td>{{ $sale->id }}</td>    
                            <td>{{ $sale->product->name_product }}</td>    
                            <td>{{ $sale->product->reference }}</td>
                            <td>
                                
                                <span class="badge badge-light-success">$ {{ $sale->product->price }}</span>
                               
                            </td>
                            <td>
                                {{ $sale->category->name_category }}
                            </td>

                           
                            <td>
                               {{ $sale->creation_date }}
                               <br>
                               {{ $sale->created_at->diffForHumans() }}
                            </td>
                            
                            <td>
                                <div class="col-lg-6 col-12">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      
                                      
                                        <a class="btn btn-icon btn-icon rounded-circle btn-flat-primary"
                                            href="{{ route('sales.show', $sale->id) }}">
                                            <i data-feather='eye'></i>
                                        </a>

                                    
                                    </div>
                                </div>
                            </td>

                        </tr> 
                        @endforeach
                        
                     
                    </tbody>
                </table>
            </div>
        
        </div>
    </div>
</div>

@endsection

