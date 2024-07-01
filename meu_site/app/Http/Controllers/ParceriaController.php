<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceria;

class ParceriaController extends Controller
{
    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:parcerias,email',
            'telefone' => 'nullable',
        ]);

        $parceria = Parceria::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
        ]);

        if ($parceria) {
            return redirect()->back()->with('success', 'Parceria cadastrada com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao cadastrar a parceria. Por favor, tente novamente.');
        }
    }
}