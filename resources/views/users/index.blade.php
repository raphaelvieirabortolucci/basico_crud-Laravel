@extends('layout')
@section('content')
    <h1>Usuários</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Novo
    usuário</a>
    <table class="table table-striped">
    <thead>
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
    <a href="{{ route('users.show', $user) }}" class="btn btn-sm
    btn-info">Ver</a>
    <a href="{{ route('users.edit', $user) }}" class="btn btn-sm
    btn-warning">Editar</a>
    <form action="{{ route('users.destroy', $user) }}"
    method="POST" class="d-inline"
    onsubmit="return confirm('Excluir este usuário?')">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger">Excluir</button>
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    @endsection