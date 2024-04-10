<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imovel; 


class DashboardController extends Controller
{
    public function index()
    {
        //filtrar imóveis do tipo 'apartamento'
        $imoveisApartamento = Imovel::where('tipo', 'apartamento')->get();

        return view('dashboard', compact('imoveisApartamento'));
    }

    
}
