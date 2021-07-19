@extends('layouts.admin')
@section('title', 'Editar producto')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7 pt-5 pb-5">
                <div class="text-right mb-3">
                    <a href="/productos" class="btn btn-outline-primary pt-1 pb-1">Regresar al listado</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Formulario Editar Productos</h4>
                        <form action="{{ url('productos/'.$product->id_product) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @include('fragments.product.form',['modo'=>'Guardar'])
                            
                            
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection