@extends('layout')
@section('content')
 <h1>Usuário #{{ $user->id }}</h1>
 <p><strong>Nome:</strong> {{ $user->name }}</p>
 <p><strong>E-mail:</strong> {{ $user->email }}</p>
 <p><strong>Cadastrado em:</strong> {{ $user->created_at->format('d/m/Y H:i')
}}</p>
 <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
