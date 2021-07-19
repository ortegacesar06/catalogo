@extends('layouts.admin')
@section('title', 'Registrar producto')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7 pt-5 pb-5">
                <div class="text-right mb-3">
                    <a href="/productos" class="btn btn-outline-primary pt-1 pb-1">Regresar al listado</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Formulario de Registro de Productos</h4>
                        <form action="{{ route('save_products') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('fragments.product.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection