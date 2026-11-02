@extends('layout')
@section('content')
 <h1>Novo usuário</h1>
 <form action="{{ route('users.store') }}" method="POST">
 @csrf
 <div class="mb-3">
 <label class="form-label">Nome</label>
 <input type="text" name="name" class="form-control" value="{{ old('name')
}}">
 </div>
 <div class="mb-3">
 <label class="form-label">E-mail</label>
 <input type="email" name="email" class="form-control" value="{{
old('email') }}">
 </div>
 <div class="mb-3">
 <label class="form-label">Senha</label>
 <input type="password" name="password" class="form-control">
 </div>
 <button class="btn btn-success">Salvar</button>
 <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
 </form>
@endsection