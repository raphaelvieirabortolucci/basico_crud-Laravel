<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CRUD de Usuários</title>
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    </head>
    <body>
        <div class="container mt-4">
            {{-- Mensagem de sucesso enviada pelo controller com ->with('success', ...) --}}
            @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            {{-- Erros de validação --}}
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
                @endforeach
            </ul>
            </div>
                @endif
             @yield('content')
        </div>
    </body>
</html>
