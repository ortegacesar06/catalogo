@extends('layouts.main')
@section('title', 'Edición')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 pt-5 pb-5">
                <div class="card">
                    <div class="card-body px-5 py-5">
                        <h4 class="text-center mb-4">Formulario Editar Productos</h4>
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