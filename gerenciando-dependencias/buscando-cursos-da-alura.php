<?php   
        /**
         * o Autoload é o arquivo do composer que consegue carregar as calsses do php através do namespace
         */
        require 'vendor/autoload.php';

        use Symfony\Component\DomCrawler\Crawler;
        use GuzzleHttp\Client;
        

        /**
         * O Client do GuzzleHttp é uma lib para fazer requisições HTTP. Com ele conseguimos trazer o corpo da pagina dos cursos
         * da Alura com o metodo GET
         */
        $cliente = new Client();
        $resposta = $cliente->request('GET', 'https://www.alura.com.br/cursos-online-programacao');
        $html = $resposta->getBody();

        
        /**
         * O Crawler é uma lib que nos possibilita fazer a manipulação do DOM de um HTML.
         * No PHP 8.3 ele gera um erro ao tentar carregar esta classe; o ideal é utilizar a versão 8.2 ou menor.
         */
        $crawler = new Crawler();
        $crawler->addHtmlContent($html);

        // var_dump($crawler);

        /**
         * O metodo filter é utilizado para fazer a filtragem do corpo html. Neste caso ele esta filtrando pela tag <span> e pela classe card-curso__nome 
         */
        $cursos = $crawler->filter('span.card-curso__nome');

        foreach($cursos as $curso){
                echo $curso->textContent . PHP_EOL;
        }