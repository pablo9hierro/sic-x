<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imovel; 
use Illuminate\Support\Facades\Auth;

class ManunciadosController extends Controller
{
    public function index()
    {
        // Obter o ID do usuário autenticado
        $userId = Auth::id();

        // Consultar os imóveis anunciados pelo usuário autenticado
        $imoveisAnunciados = Imovel::where('user_id', $userId)->get();

        // Retornar a view com os imóveis anunciados
        return view('MeusAnunciados', compact('imoveisAnunciados'));
    }
}
