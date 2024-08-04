<?php
    /**
     * Aqui vamos configurar o composer para ele conseguir carregar nossas usando a PSR-4
     * Vamos fazer isso configurando o arquivo composer.json colocando:
     * 
     * "autoload": {
     *      "psr-4": {
     *          "LucasRe\\BuscadorDeCursos\\": "src/"
     *      }
     *  }
     * 
     * Essa psr-4 funciona da seguinte forma: LucasRe\\BuscadorDeCursos\\ é o namespace padrão da aplicação e isso irá mapear para
     * a pasta src, ou seja, todas as classes que começarem com esse namespace vão ser buscadas nessa pasta src
     * obs: utilizamos duas contrabarras para escapar a barra
     * 
     * Após essa adição executamos o comando ´´´composer dump-autoload´´´ ou ´´´composer dumpautoload´´´ para atualizar o autoload
     * e ele reconhecer a adição
     */