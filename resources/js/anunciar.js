// anunciar.js

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
