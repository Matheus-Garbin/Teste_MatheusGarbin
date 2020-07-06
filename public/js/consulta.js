
function deletar(id) {
    var r = confirm("você irá excluir permanentemente este artigo.");
    if (r == true) {
        $.ajax({
            url: '/artigo/' + id,
            type: 'GET',
            success: function (data) {
                alert("excluído com sucesso");
                location.reload();
            },
            error: function (erro) {
                console.log(erro);
                alert("erro ao tentar excluir");
            }
        });
    } else {
        console.log("Cancelar");
    }
}
