<?php

    require 'vendor/autoload.php';
    require 'src/Buscador.php';
    /**
     * Criamos a pasta src onde será criado a classe que será responsavel pela busca dos cursos.
     * Neste aqui, instanciamos a classe buscador que encapsula toda a lógica da busca de cursos 
     * com o Client Http e o DOMCrawler
     */
    use LucasRe\BuscadorDeCursos\Buscador;
    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler;

    /**
     * O Client do GuzzleHttp é uma lib para fazer requisições HTTP. Com ele conseguimos trazer o corpo da pagina dos cursos
     * da Alura com o metodo GET
     */
    $cliente = new Client(['base_uri' => 'https://www.alura.com.br']);

    /**
     * O Crawler é uma lib que nos possibilita fazer a manipulação do DOM de um HTML.
     * No PHP 8.3 ele gera um erro ao tentar carregar esta classe; o ideal é utilizar a versão 8.2 ou menor.
     */
    $crawler = new Crawler();

    

    $buscador = new Buscador($cliente, $crawler);
    $cursos = $buscador->buscar('/cursos-online-programacao');

    foreach($cursos as $curso){
        echo $curso . PHP_EOL;
    }