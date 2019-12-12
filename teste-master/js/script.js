$(document).ready(function() {
    $('#meuModal').modal('toggle');

    $("#form_cadastro").submit(function() {
        var nm_livro = $('#nm_livro').val();
        var autor = $('#autor').val();
        var descricao = $('#descricao').val()
        var isbn = $('#isbn').val();

        $.ajax({
            type: "POST",
            data: {
                nm_livro: nm_livro,
                autor: autor,
                descricao: descricao,
                isbn: isbn
            },
            url: "controller/cadastro.php",
            success: function(data) {
                console.log(data);
            }
        });

        return false;
    });
});