@extends('layout')
@section('content')
 <h1>Editar usuário</h1>
 <form action="{{ route('users.update', $user) }}" method="POST">
 @csrf
 @method('PUT')
 <div class="mb-3">
 <label class="form-label">Nome</label>
 <input type="text" name="name" class="form-control" value="{{ old('name',
$user->name) }}">
 </div>
 <div class="mb-3">
 <label class="form-label">E-mail</label>
 <input type="email" name="email" class="form-control" value="{{
old('email', $user->email) }}">
 </div>
 <div class="mb-3">
 <label class="form-label">Nova senha (deixe em branco para
manter)</label>
 <input type="password" name="password" class="form-control">
 </div>
 <button class="btn btn-success">Atualizar</button>
 <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
 </form>
@endsection
