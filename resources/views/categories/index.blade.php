@extends('layouts.app')

@section('content')
<div class="row" id="table-head">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">🚀 Categorías</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star me-25"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <span>Crear</span>
                    </a>
                </p>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Id:</th>
                            <th>Nombre de la categoría:</th>
                            <th>Descripción de la categoría:</th>
                            <th>Estado:</th>
                            <th>Acciones:</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>    
                            <td>{{ $category->name_category }}</td>    
                            <td>{{ $category->description_category }}</td>
                            <td>
                                @if ($category->status == 'Activo')
                                <span class="badge badge-light-success">Activo</span>
                                @elseif ($category->status == 'No activo')
                                <span class="badge badge-light-danger">Inactivo</span>
                                @endif
                            </td>
                            
                            <td>
                                <div class="col-lg-6 col-12">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a class="btn btn-icon btn-icon rounded-circle btn-flat-warning"
                                            href="{{ route('categories.edit', $category->id) }}">
                                            <i data-feather='edit-3'></i>
                                        </a>
                                      
                                        <a class="btn btn-icon btn-icon rounded-circle btn-flat-primary"
                                            href="{{ route('categories.show', $category->id) }}">
                                            <i data-feather='eye'></i>
                                        </a>

                                        <form class="delete-category'"
                                            action="{{ route('categories.destroy', $category->id) }}"
                                            method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-icon btn-icon rounded-circle btn-flat-danger"
                                                type="submit">
                                                <i data-feather='trash-2'></i>
                                            </button>
                                        </form>
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

