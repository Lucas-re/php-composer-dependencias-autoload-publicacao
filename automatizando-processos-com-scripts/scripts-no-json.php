<?php 
    /**
     * Vamos simplificar a execução de scripts pela linha de comando. Exemplo: para executar um comando de teste com o phpUnit
     * executamos o seguinte comando: ´´´vendor/bin/phpunit <diretorio>/<nome_do_arquivo>´´´ porém por ser um comando extenso 
     * podemos esquecer onde esta o arquivo ou errar a digitação do comando
     * 
     * Vamos criar uma forma de executar somente ´´´ composer teste ´´´ e o comando anteriormente citado, ser executado
     * 
     * No arquivo composer.json podemos adicionar uma parte de scripts e, de forma simples podemos definir o nome de um script;
     * e o valor dele é o que vai ser executado.
     * Com isso temos uma vantagem em não precisar digitar o vendor/bin porque, se o comando que será executado não existir no sistema operacional,
     * ele irá buscar dentro da vendor na pasta bin
     * 
     * "scripts": {
     *       "teste": "phpunit testes\\testeBuscadorDeCursos.php"
     *   }
     */
