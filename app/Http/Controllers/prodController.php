<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class prodController extends Controller
{
    // Exibe o formulário para criar novo produto
    public function index() {
        return view('index');
    }
    // Exibe o formulário de edição de um produto 
    public function edit() {
        return view('edit');
    }
    public function show() {
        // Exemplo de dados estáticos para teste
        $produtos = [
            (object) ['id' => 1, 'nome' => 'Produto 1 | R$ 10,22'],
            (object) ['id' => 2, 'nome' => 'Produto 2 | R$ 11,00'],
            (object) ['id' => 3, 'nome' => 'Produto 3 | E$ 1.000,00'],
        ];
    
        return view('show', ['produtos' => $produtos]);
    }    
      
    // Salva um novo produto e redireciona para a página de sucesso
    public function store(Request $request) {
        return redirect('/produtos/sucesso');
    }

    // Atualiza/redireciona para a página de sucesso
    public function save(Request $request) {
        return redirect('/produtos/sucesso');
    }
}    
