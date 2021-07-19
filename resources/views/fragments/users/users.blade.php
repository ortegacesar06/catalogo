@extends('layouts.admin')
@section('title', 'Listado de usuarios')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-5 pb-5">
            <div class="text-right mb-3">
                <a href="/admin" class="btn btn-outline-primary pt-1 pb-1">Regresar a Inicio</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="title-page">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="section-heading mb-0">Listado de Usuarios</h4>
                            </div>
                            <div class="col text-right">
                                <a href="/admin/create-user" class="btn btn-primary">Agregar Usuario</a>
                            </div>
                        </div>
                    </div>
                    <table class="table mt-2">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Correo</th>
                                <th scope="col" class="text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $accounts as $account )
                            <tr scope="row">
                                <td>{{ $account->firstname }}</td>
                                <td>{{ $account->lastname }}</td>
                                <td>{{ $account->email }}</td>
                                <td class="text-right">
                                    <a href="/admin/edit-user/{{$account->id_account}}" class="btn btn-primary mb-1">Editar</a>
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
            </div>
        </div>
    </div>
</div>
@endsection
