<?php
    /**
     * Mem sempre o código do projeto segue a PSR-4; podemos trabalhar com códigos legados ou projetos de pessoas que não conheciam
     * a PSR-4. 
     * Nesse caso podemos usar o composer e o autoload do composer? Sim podemos! 
     * Existe uma outra configuração que podemos informar para o composer que é o classmap, ou seja, o mapa de classes.
     * Esse classmap basicamente define que estamos mapeando uma classe, ou seja, estamos informando que existe uma classe em 
     * determinado diretório 
     * Exemplo:Dentro do arquivo composer.json, na tag de autoload, adicionamos o classmap e passamos para ele o diretório e o nome da classe que queremos instanciar 
     * ou somente o diretório que estão as classes que queremos instanciar
     * 
     *    "classmap": [
     *        "./teste.php"
     *    ],
     * 
     * Com isso o composer ler o aquivo ou diretório que fopi definido no classmap, ver as classes que existem e mapeia dando require nos arquivos sempre que as classes
     * forem acessadas
     * 
     * Outro caso mais comum é quando temos um arquivo simples php, por exemplo um arquivo com varias funções que não é uma classe. Para isso podemos usar a entra files
     * no arquivo composer.json dentro da tag autoload 
     * Dentro desse array será informado quais arquivos ou diretórios sempre serão incluidos 
     * 
        * "files": [
     *      "./funcoes.php"
     *    ],
     */



     require 'vendor/autoload.php';
     /**
      * Aqwui estamos instanciado uma classe que não segue o padrão da PSR-4, com o classmap
      */
     Teste::teste();

    /**
     * Aqui estamos exibindo uma função do aquivo funcoes.php, que também não segue os padrões da psr-4, atraves do files.
     */
     exibeMensagem("aqui");
     exit;