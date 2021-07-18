@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
         <div class="col-11 pt-5 pb-5">
        
                <h2 class="section-heading text-uppercase text-center">Lista de Productos</h2>

                <a href="/productos/crear" class="btn btn-primary">Crear Nueva Categoría</a>
        
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $products as $product )
                        <tr>
                            <td>{{ $product->id_product }}</td>

                            <td>
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$product->image_path }}" width="200"  height="200" alt="">
                            </td>
                            <td>{{$product->name }}</td>
                            <td>{{$product->description }}</td>
                            <td>{{$product->price }}</td>
                            <td>{{$product->stock }}</td>
                            <td>{{$product->category_id }}</td>
                    
                            <td>
                                <a href="{{ url("/productos/".$product->id_product.'/editP') }}"class="btn btn-warning" >   Editar</a>
                                | 
                                <form action="{{ url("/productos/".$product->id_product) }}" class="d-inline" method="post">
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