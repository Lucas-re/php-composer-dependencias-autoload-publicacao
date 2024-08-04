<?php
    /**
     * PHP CodeSniffer: é uma ferramenta que verifica se a escrita do código esta de forma correta. Por exemplo: existe um padrão de códificação
     * uma PSR, que dita que estruturas de controle, como looping, if's tem que ter as chaves sendo abertas na mesma linha que a estrutura foi definida;
     * ja metodos e classes tenha as chaves abertas na linha a baixo da estrutura
     * 
     * Para instalarmos esse pacote como dependencia de desenvolvimento executamos o comando ´´´ composer require --dev "squizlabs/php_codesniffer=*" ´´´  
     * 
     * Na pasta vendo/bin temos todas as ferramentas da linha de comando que o composer nos fornece e agora temos o phpcs
     * Ao executarmos o comando ´´´ vendor/bin/phpcs --help ´´´ ele nos mostra os comandos que podemos executar 
     * 
     * Com o comando ´´´ vendor/bin/phpcs --standard=PSR12 src/ ´´´ podemos analisar os padrões dos códigos. OBS: podemos passar outras versões de PSR ou 
     * outro diretório para ser analisado
     * 
     */