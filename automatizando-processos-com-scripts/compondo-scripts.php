<?php 
    /**
     * Agora vamos criar um script que consiga executar três scripts php
     * 
     * No arquivo composer.json, em scripts adicnamos a instrução check e dentro dessa instrução, passamos como um array
     * os scripts que queremos executar em ordem.
     * 
     * Para cada comando passamos o @ para que o composer entenda que, essas instruções a serem executadas, são scripts criados 
     * no arquivo composer.json
     * Exemplo:
     * 
     * "scripts": {
     *       "check": [
     *          "@phan",
     *          "@cs",
     *          "@teste"
     *        ]
     *   }
     * 
     * Com isso executamos apenas o comando ´´´ composer check ´´´ e todos os outros cripts cirados serão executados
     * 
     * Uma coisa interessante é que podemos executar o comando ´´´ composer list ´´´ e ele irá exibir todos os comandos existentes inclusive os personalizados
     */