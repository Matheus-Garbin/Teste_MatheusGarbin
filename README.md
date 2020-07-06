# Teste
//================================================================
        Teste desenvolvedor Uplexis
//================================================================
Você deverá desenvolver uma aplicação que utilize PHP  e Framework Laravel 5. A aplicação deve ser capaz de realizar uma requisição ao Blog da upLexis (http://www.uplexis.com.br/blog) e capturar artigos de acordo com a pesquisa realizada. 
Os dados devem ser salvos em um banco de dados MySQL.

//================================================================
                DETALHE
//================================================================
    Banco de Dados MySQL
        Criar tabela usuario (id, usuario, senha)
        Criar um usuário na tabela (id: 1, usuario: admin, senha: admin);
        Criar tabela artigos (id, id_usuario, titulo, link);
    Telas
        Tela de Login (usuário e senha)
            Autenticar utilizando a tabela de usuário
        Tela de Capturar (campo para digitar um texto e botão  Capturar)
            Ao clicar no botão Capturar, realizar a busca no blog da upLexis, recuperar os artigos da primeira página da pesquisa (título e link), e salvar no banco de dados. Apresentar uma mensagem de sucesso ou erro
        Tela para Exibir os Artigos
            Exibir os artigos salvos no banco de dados (título e link) e um botão de excluir o artigo do banco de dados.
//================================================================
        REQUISITOS
//================================================================
    PHP 7 e Laravel Framework 5    
    MySQL
    Bootstrap (opcional)
    Ajax      (opcional)

//================================================================
                         EXTRAS 
//================================================================
    A captura foi realizada com o uso do cURL do PHP.
    Será necessário a instalação.
    
    
Aplicação desenvolvida utilizando:

-PHP 7 
-Laravel Framework 5


para rodar o projeto será necessário: 
    composer install;
    criar o banco de dados;

enha: admin), caso ocorra capturas repetidas as mesmas não serão salvas na base.
