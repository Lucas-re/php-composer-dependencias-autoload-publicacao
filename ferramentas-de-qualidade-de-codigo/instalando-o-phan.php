<?php 
    /**
     * Phan: é uma ferramenta que identifica possiveis erros no código
     * executamos o comando ´´´ composer require --dev phan/phan ´´´ para instalar o pacote como dependencia de desenvolvimento
     * 
     * Para executarmos o Phan será necessario habilitar e extensão de ASTs, caso você não saiba se ela ja esta habilitada.
     * utilizamos o paramentro ´´´ --use-fallback-parser ´´´ ao executar algum comando
     * 
     * Podemos informar um arquivo ou diretório para ser analisado. Um exemplo para analisar um arquivo é executarmos 
     * o seguinte comando: ´´´ vendor/bin/phan --use-fallback-parser src/<nome_do_arquivo> ´´´ ou ´´´ vendor/bin/phan src/<nome_do_arquivo> ´´´
     * 
     * Na raiz do projeto criamos a pasta .phan e dentro dela o arquivo config.php. Nesse arquivo apontamos as dependencias da classe a ser analizada
     * para que o phan entenda por completo o arquivo.
     */