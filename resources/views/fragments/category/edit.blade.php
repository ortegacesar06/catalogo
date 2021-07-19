@extends('layouts.admin')
@section('title', 'Editar categoría')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 pt-5 pb-5">
                <div class="text-right mb-3">
                    <a href="/category" class="btn btn-outline-primary pt-1 pb-1">Regresar al listado</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Formulario Editar Categoría</h4>
                        <form action="{{ url('/category/'.$category->id_category) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH') }}
                            @include('fragments.category.form',['modo'=>'Guardar'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection