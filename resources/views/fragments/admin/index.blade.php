@extends('layouts.main')
@section('title', 'Principal')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 pt-5 pb-5">
                <div class="card">
                    <div class="card-body px-5 py-5">
                        <h4 class="mb-4">Bienvenido</h4>
                        <p class="mb-0"><b>Usuario:</b> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                        <p class="mb-0"><b>Correo:</b> {{ Auth::user()->email }}</p>
                        <p class="mb-4"><b>Rol:</b> {{ Auth::user()->role->name }}</p>

                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <div class="d-grid gap-2">
                                <button class="btn btn-danger" type="submit">Cerrar sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection