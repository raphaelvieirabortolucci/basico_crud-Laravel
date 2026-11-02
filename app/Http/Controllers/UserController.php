<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    // LISTAR: busca todos os registros e envia para a view
    public function index(){
        $users = User::all(); // SELECT * FROM users
        return view('users.index', compact('users'));
    }
    // FORMULÁRIO DE CADASTRO: apenas exibe a tela
    public function create(){
        return view('users.create');
    }
    // SALVAR: valida os dados e insere no banco
    public function store(Request $request)
    {
        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
    User::create($dados); // INSERT INTO users ...
        return redirect()->route('users.index')
        ->with('success', 'Usuário cadastrado com sucesso!');
    }
    // DETALHES: mostra um único usuário
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    // FORMULÁRIO DE EDIÇÃO: envia o usuário para preencher o form
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    // ATUALIZAR: valida e altera o registro
    public function update(Request $request, User $user)
    {
        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);
        // Se a senha veio vazia, não altera a senha atual
        if (empty($dados['password'])) {
            unset($dados['password']);
        }
        $user->update($dados); // UPDATE users SET ... WHERE id = ?
            return redirect()->route('users.index')
            ->with('success', 'Usuário atualizado com sucesso!');
    }
 // EXCLUIR: remove o registro
    public function destroy(User $user)
    {
        $user->delete(); // DELETE FROM users WHERE id = ?
        return red
            ->with('success', 'Usuário excluído com sucesso!');
    }
    }