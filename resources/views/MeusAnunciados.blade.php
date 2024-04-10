<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Anúncios</title>
    <!-- Adicione os estilos CSS necessários aqui -->
</head>
<body>

    <div class="container">
        <h2>Meus Anúncios</h2>

        <div class="imoveis-list">
            <!-- renderizar os imóveis do usuário aqui -->
            @foreach($imoveisAnunciados as $imovel)
                <div class="imovel-card">
                    <h3>{{ $imovel->titulo }}</h3>
                    <p>{{ $imovel->descricao }}</p>
                    <!-- adicionar mais informações do imóvel conforme necessário -->
                    <div class="endereco-info">
                        <p><strong>Cidade:</strong> {{ $imovel->cidade }}</p>
                        <p><strong>Bairro:</strong> {{ $imovel->bairro }}</p>
                        <p><strong>Estado:</strong> {{ $imovel->estado }}</p>
                    </div>
                </div>
            @endforeach

            @if($imoveisAnunciados->isEmpty())
                <p>Você não possui imóveis anunciados.</p>
            @endif
        </div>
    </div>

</body>
</html>
