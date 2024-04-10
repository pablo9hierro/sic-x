<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Inclua os estilos do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Seus estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

    <!-- Barra Lateral -->
    <aside class="sidebar">
        <div class="logo">Logo</div>
        <nav class="nav-links">
            <ul>
                <li><a href="{{ route('anunciar.form') }}">Anunciar um imóvel</a></li>
                <li><a href="{{ route('Chat.index') }}">Chat</a></li>
                <li><a href="{{ route('MeusAnunciados.index') }}">Meus Anúncios</a></li>
                <!-- Adicionar mais links conforme necessário -->
            </ul>
        </nav>
    </aside>

    <!-- Catálogo de Imóveis (Carrossel) -->
    <div class="container mt-4">
        <div id="imoveisCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($imoveisApartamento as $key => $imovel)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <!-- Card do Imóvel -->
                        <div class="card">
                            <!-- Imagem do Imóvel -->
                            <img src="{{ $imovel->imagem }}" class="card-img-top" alt="Imagem do Imóvel">
                            <div class="card-body">
                                <!-- Detalhes do Imóvel -->
                                <h5 class="card-title">{{ $imovel->titulo }}</h5>
                                <p class="card-text">{{ $imovel->descricao }}</p>
                                <!-- Adicione mais detalhes conforme necessário -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Adicione os controles do Carrossel conforme necessário -->
        </div>
    </div>

    <!-- Seus Scripts JS Aqui -->
    <script src="/js/seu-script.js"></script>

    <!-- Inclua os scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
