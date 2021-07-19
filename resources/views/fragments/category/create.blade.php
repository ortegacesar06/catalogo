@extends('layouts.admin')
@section('title', 'Registrar categoría')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 pt-5 pb-5">
                <div class="text-right mb-3">
                    <a href="/category" class="btn btn-outline-primary pt-1 pb-1">Regresar al listado</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Formulario Registro Categoría</h4>
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('fragments.category.form',['modo'=>'Registrar'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection