@extends('layouts.admin')
@section('title', 'Listado de productos')

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
                                <h4 class="section-heading mb-0">Lista de Productos</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="/productos/crear" class="btn btn-primary">Crear producto</a>
                            </div>
                        </div>
                
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
                                        <a href="{{ url("/productos/".$product->id_product.'/editP') }}"class="btn btn-warning mb-1" >   Editar</a>
                                        
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
        </div>
    </div>

@endsection