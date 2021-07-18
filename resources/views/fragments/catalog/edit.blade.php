@extends('layouts.main')
@section('title', 'Edición')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 pt-5 pb-5">
                <div class="card">
                    <div class="card-body px-5 py-5">
                        <h4 class="text-center mb-4">Formulario Editar Catálogo</h4>
                        <form action="{{ url('/catalog/'.$catalog->id_catalog) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH') }}
                            @include('fragments.catalog.form',['modo'=>'Guardar'])
                            
                            
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection