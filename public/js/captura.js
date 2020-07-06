//Efetuando a captura de artigos.

$(function() {
    $('#btn_capturar').on('click', function() {
        var val = $("#cap_text").val();
        var url = 'https://www.uplexis.com.br/blog/?s='+ val;
        console.log(url);
      $.ajax({
            // apontando para a função
           url:  url,
           type: 'GET',
           crossDomain: true,
           dataType: 'jasonp',
           success: function (data) {
                console.log(data);

            },
            error: function (erro) {

            }
        });


    });
});
