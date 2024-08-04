<?php
    /**
     * O PHP-FIG é um grupo de interoperabilidade entre frameworks que prorpõe diversos padrões, interfaces e recomendações 
     * dentre uma dessas recomendações são as PSR's e essas recomendações fazem com que componentes sejam reutilizados entre frameworks 
     * 
     * Ou seja, se criarmos uma ferramenta que trata de cache; ela irá funcionar tanto no Symfony quanto no zend Framework ou no Cake PHP.
     * Uma dessas recomendações é a recomendação de um Autoloader, dar forma de mapear suas classes com nomes das classes e nomes de arquivos 
     * para que uma função de autoload consiga encontrá-las
     * 
     * NAMESPACE:
     * Umas classe que esteja em um namespace precisa ter um nemaespace principal, normalmente chamada de vendor namespace. Esse vendor namespace é o nome
     * do distribuidor do código e esse namespace vai ser mapeado para uma pasta por exemplo a pasta src, ou seja, todas as classes que pertencerem ao namespace
     * Lucas\BuscadorDeCursos vão estar dentro da pasta src. E se houver mais namespace, como por exemplo: Lucas\BuscadorDeCursos\Helper significa qua a classe vai estar
     * dentro de uma pasta Helper. 
     * 
     * É importante que o nome do arquivo seja identico ao nome da classe
     */
