<?php 
    /**
     * Agora vamos fazer com que, sempre que for executado o ´´´ composer update ´´´, ele execute o phpunit após instalar as atualizações.
     * Para isso adicionamos a instrução post-update-cmd aos scripts no arquivo composer.json e passamos para ele qual script que queremos que
     * ele execute 
     * 
     * "post-update-cmd": [
     *      "@cs"
     *  ]
     */