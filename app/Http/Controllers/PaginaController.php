<?php

namespace App\Http\Controllers;

class PaginaController extends Controller
{
    public function sobre()
    {
        $sistema = 'LogisExpress';
        $mensagem = 'Organizando entregas com eficiência.';

        return view('sobre', [
            'sistema' => $sistema,
            'mensagem' => $mensagem
        ]);
    }
}