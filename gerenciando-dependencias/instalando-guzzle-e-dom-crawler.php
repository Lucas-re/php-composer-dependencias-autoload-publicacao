<?php
    /**
     * Guzzle Http: composer require guzzlehttp/guzzle
     * Após executar este comando o composer vai ao packagist buscar este pacote
     */

    /**
     * Outra forma de instalar um pacote com o composer e adicionando o pacote ao arquivo composer.json e executando o comando:
     * ´´´composer install´´´
     */

    /**
     * Com o comando: ´´´ composer update ´´´, instalamos e atualizamos os pacotes do projeto
     */

    use GuzzleHttp\Client;
    /**
     * 
     */
    $cliente = new Client();
    $resposta = $cliente->request('GET', 'https://www.alura.com.br/cursos-online-programacao');
    $html = $resposta->getBody();