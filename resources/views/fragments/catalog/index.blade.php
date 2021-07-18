@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
         <div class="col-11 pt-5 pb-5">
        
                <h2 class="section-heading text-uppercase text-center">Lista de Catalogos</h2>

                <a href="{{ route('catalog.create') }}" class="btn btn-primary">Crear Nueva Catálogo</a>
        
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
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
                    
                            <td>
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
                
                

            </div>
        </div>
    </div>

@endsection