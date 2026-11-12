<?php

namespace App\Http\Controllers;

class EntregaController extends Controller
{
    public function index()
    {
        $entregas = [
            [
                'destinatario' => 'Carlos',
                'cidade' => 'São Paulo'
            ],
            [
                'destinatario' => 'Mariana',
                'cidade' => 'Rio de Janeiro'
            ],
            [
                'destinatario' => 'João',
                'cidade' => 'Belo Horizonte'
            ]
        ];

        return view('entregas', [
            'entregas' => $entregas
        ]);
    }
}