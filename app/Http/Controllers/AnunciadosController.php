<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//importar o models
use App\Models\Imovel;
//importar o auth
use Illuminate\Support\Facades\Auth;


class AnunciadosController extends Controller
{
    public function meusImoveis()
    {
        // Obtém o ID do usuário autenticado
        $userId = Auth::id();

        // Busca os imóveis anunciados pelo usuário
        $imoveisDoUsuario = Imovel::where('user_id', $userId)->get();

        // Retorna a view com os imóveis do usuário
        return view('meus-imoveis', compact('imoveisDoUsuario'));
    }
}
