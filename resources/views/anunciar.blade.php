<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/anunciar.css')}}">

   
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('js/anunciar.js')}}"></script>

</head>
<body class="body">

    <div class="form-container">
        <h2>Anunciar um Imóvel</h2>
        <form action="{{ route('anunciar.store') }}" method="POST" class="form">
            @csrf

            <div class="input-group">
                <label for="titulo">Título:</label class="input">
                <input type="text" name="titulo" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" required></textarea>
            </div>

            <div class="form-group">
                <label for="m2">Metros Quadrados:</label>
                <input type="number" name="m2" required>
            </div>

            <div class="form-group">
                <label for="quintal">Quintal:</label>
                <input type="checkbox" name="quintal">
            </div>

            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select name="tipo" required>
                    <option value="casa">Casa</option>
                    <option value="condominio">Condomínio</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="kitnet">Kitnet</option>
                    <option value="comodo">Cômodo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pet">Aceita Pet:</label>
                <input type="checkbox" name="pet">
            </div>

            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" required>
                <button type="button" id="returncep">Consultar CEP</button>
            </div>

            <div class="form-group">
                <label for="numero_do_imovel">Número do Imóvel:</label>
                <input type="number" name="numero_do_imovel" required>
            </div>

            <div class="form-group">
                <label for="tempo_aluguel">Tempo de Aluguel:</label>
                <input type="date" name="tempo_aluguel" required>
            </div>

            <!-- Campos para os dados do CEP -->
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" readonly>
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro" readonly>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" readonly>
            </div>

            <button type="submit">Anunciar Imóvel</button>
        </form>
    </div>

</body>

<script>

$(document).ready(function() {
        $('.form').submit(function(e) {

            e.preventDefault();

            
            window.location.href = "{{ route('MeusAnunciados.index') }}";
        });
    });

$(document).ready(function() {
    $('#returncep').click(function() {
        var cep = $('#cep').val();

        // Faça a chamada AJAX para a API
        $.ajax({
            url: 'https://viacep.com.br/ws/' + cep + '/json/',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Atualize os campos no seu formulário com os dados retornados pela API
                $('#bairro').val(data.bairro);
                $('#cidade').val(data.localidade);
                $('#estado').val(data.uf);
            },
            error: function(error) {
                console.error('Erro ao chamar a API de CEP:', error);
            }
        });
    });
});

</script>
</html>