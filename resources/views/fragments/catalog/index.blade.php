@extends('layouts.admin')
@section('title', 'Listado de catálogos')

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
                                <h4 class="section-heading mb-0">Lista de Catalogos</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('catalog.create') }}" class="btn btn-primary">Crear Nueva Catálogo</a>
                            </div>
                        </div>
                
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $catalogs as $catalog )
                                <tr>
                                    <td>{{ $catalog->id_catalog }}</td>
        
                                    <td>
                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$catalog->image_path }}" width="200"  height="200" alt="">
                                    </td>
                                    <td>{{$catalog->name }}</td>
                            
                                    <td class="text-right">
                                        <a href="{{ url('/catalog/'.$catalog->id_catalog.'/edit') }}"class="btn btn-warning" >   Editar</a>
                                        | 
                                        <form action="{{ url('/catalog/'.$catalog->id_catalog) }}" class="d-inline" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
        
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table> 
                        
                        {{ $catalogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection