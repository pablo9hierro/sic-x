<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// chamar o modelo Imovel
use App\Models\Imovel;
//importar a classe Redirect
use Illuminate\Support\Facades\Redirect; 


class AnunciarController extends Controller
{
    
    public function showForm()
    {
        return view('anunciar');
    }

    public function store(Request $request)
    {
            // models/tabela imovel
            $request->validate([
        'titulo' => 'required|string|max:255',
        'descricao' => 'required|string',
        'm2' => 'required|numeric',
        'quintal' => 'boolean',
        'tipo' => 'required|in:casa,condominio,apartamento,kitnet,comodo',
        'pet' => 'boolean',
        'cep' => 'required|numeric',
        'numero_do_imovel' => 'required|numeric',
        'tempo_aluguel' => 'required|date',
    ]);

    // criação dum novo imovel no banco
    $imovel = Imovel::create($request->all());

    $this->atualizarDadosCEP($imovel);

    // redirecionar após o salvamento bem sucedido
    return redirect()->route('meus-anunciados.index');
}



   protected function atualizarDadosCEP(Imovel $imovel)
{
    $cep = $imovel->cep;

    // Faça a chamada à API de CEP
    $url = 'https://viacep.com.br/ws/' . $cep . '/json/';
    $dadosCEP = json_decode(file_get_contents($url), true);

    // Atualizar campos do imóvel
    if ($dadosCEP) {
        $imovel->bairro = $dadosCEP['bairro'];
        $imovel->cidade = $dadosCEP['localidade'];
        $imovel->estado = $dadosCEP['uf'];
        $imovel->save();
    }
}
    }

