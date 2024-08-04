<?php
    /**
     * Com o comando ´´´ composer require --dev phpunit/phpunit ´´´  instalamos dependencias que ficam em uma parte separada do nosso projeto,
     * ou seja, identificamos que essas dependencias só serão instaladas quando estivermos no ambiente de desenvolvimento.
     * 
     * No ambiente de produção, ao executarmos  ´´´ composer install --no-dev ´´´ o composer irá baixar as dependencias que estão dentro da tag require no arquivo 
     * composer.json e não as que estão dentro de require-dev
     * 
     * O phpUnit nos fornece um executavel que fica dentro da pasta vendor/bin que podemos executar com o comando ´´´ php vendor/bin/phpunit ´´´
     * Com ele podemos verificar qual versão esta instalada ´´´ vendor/bin/phpunit --version´´´
     */