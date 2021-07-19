@extends('layouts.admin')
@section('title', 'Principal')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 pt-5 pb-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Menú principal</h4>
                        <p class="mb-0"><b>Usuario:</b> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                        <p class="mb-4"><b>Correo:</b> {{ Auth::user()->email }}</p>

                        <a href="/admin/perfil" class="btn btn-outline-primary btn-block mb-1 pt-2 pb-2 text-uppercase"><span>Mi Perfil</span> <i class="icon-long-arrow-right"></i></a>
                        <a href="/catalog" class="btn btn-outline-primary btn-block mb-1 pt-2 pb-2 text-uppercase"><span>Catálogos</span> <i class="icon-long-arrow-right"></i></a>
                        <a href="/category" class="btn btn-outline-primary btn-block mb-1 pt-2 pb-2 text-uppercase"><span>Categorías</span> <i class="icon-long-arrow-right"></i></a>
                        <a href="/productos" class="btn btn-outline-primary btn-block mb-1 pt-2 pb-2 text-uppercase"><span>Productos</span> <i class="icon-long-arrow-right"></i></a>
                        <a href="/admin/users" class="btn btn-outline-primary btn-block mb-1 pt-2 pb-2 text-uppercase"><span>Usuarios</span> <i class="icon-long-arrow-right"></i></a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-block" type="submit">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
