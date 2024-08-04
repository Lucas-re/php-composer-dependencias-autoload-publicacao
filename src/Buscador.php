<?php 
    /**
     * Aqui criamos uma classe para encapsular a lógica do buscador de cursos
     */
    namespace LucasRe\BuscadorDeCursos;

    use GuzzleHttp\ClientInterface;
    use Symfony\Component\DomCrawler\Crawler;

    class Buscador {

        /**
         * 
         */
        private $httpClient;

        /**
         * 
         */
        private $crawler;
         
        public function __construct(ClientInterface $httpClient, Crawler $crawler)
        {
            $this->httpClient = $httpClient;
            $this->crawler = $crawler;
        }

        /**
         * 
         */
        public function buscar(string $url): array
        {
            $resposta = $this->httpClient->request('GET', $url);
            $html = $resposta->getBody();

            $this->crawler->addHtmlContent($html);
            $elementoCcursos = $this->crawler->filter('span.card-curso__nome');
            $cursos = [];

            foreach($elementoCcursos as $elemento){
                $cursos[] = $elemento->textContent;
            }

            return $cursos;
            
        }

    }