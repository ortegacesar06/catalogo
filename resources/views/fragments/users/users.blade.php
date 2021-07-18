@extends('layouts.main')
@section('title', 'Iniciar sesión')

@section('content')

<div class="container mt-5">
    <div class="title-page">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-0">Listado de <b>Usuarios</b></h2>
            </div>
            <div class="col-3 text-right">
                <a href="/admin/create-user" class="btn btn-success">Agregar Usuario</a>
            </div>
        </div>
    </div>

    <table class="table mt-2">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $accounts as $account )
            <tr scope="row">
                <td>{{ $account->firstname }}</td>
                <td>{{ $account->lastname }}</td>
                <td>{{ $account->email }}</td>
                <td>
                    <a href="/admin/edit-user/{{$account->id_account}}" class="btn btn-primary">Editar</a>
                    <form action="{{ url('/admin/delete/'.$account->id_account) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger" onclick="return confirm('¿Deseas eliminar el usuario?')" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
