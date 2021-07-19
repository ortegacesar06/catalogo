@extends('layouts.admin')
@section('title', 'Listado de categorías')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 pt-5 pb-5">
                <div class="text-right mb-3">
                    <a href="/admin" class="btn btn-outline-primary pt-1 pb-1">Regresar a Inicio</a>
                </div>
                <div class="card">
                    <div class="card-body">                        
                        <div class="row align-items-center mb-4">
                            <div class="col-6">
                                <h4 class="section-heading mb-0">Lista de Categorias</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('category.create') }}" class="btn btn-primary">Crear Nueva Categoría</a>
                            </div>
                        </div>
                
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Catálogo</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $categories as $category )
                                <tr>
                                    <td>{{ $category->id_category }}</td>

                        
                                    <td>{{$category->name }}</td>
                                    <td>{{$category->catalog->name }}</td>
                            
                                    <td class="text-right">
                                    <a href="{{ url('/category/'.$category->id_category.'/edit') }}"class="btn btn-warning" >   Editar</a>
                                    | 
                                    <form action="{{ url('/category/'.$category->id_category) }}" class="d-inline" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection