<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voluntario;

class VoluntarioController extends Controller
{
    public function store(Request $request)
    {
        // Valide os dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'nullable|string|max:255',
            'endereco' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:255',
            'email' => 'required|email|max:255|unique:voluntario,email',
            'mensagem' => 'nullable|string',
        ]);

        // Crie um novo voluntário
        Voluntario::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'email' => $request->email,
            'texto_livre' => $request->mensagem,
        ]);

        // Redirecione ou mostre uma mensagem de sucesso
        return redirect()->back()->with('success', 'Obrigado por se voluntariar!');
    }
}