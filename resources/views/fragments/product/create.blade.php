@extends('layouts.main')
<!--@section('title', 'Registro')-->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 pt-5 pb-5">
                <div class="card">
                    <div class="card-body px-5 py-5">
                        <h4 class="text-center mb-4">Formulario de Registro de Productos</h4>
                        @include('fragments.product.form')



                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection