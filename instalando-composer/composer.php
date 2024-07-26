<?php
    /**
     * O composer é um gerenciador de dependencias. Mas ele não é igual o Yum ou Apt do linux que utilizamos para instalar programas e bibliotecas no S.O
     * o composer é diferente porque ele instala baseado em projeto, ou seja para cada profeto é instalado as dependencias necessárias 
     * 
     * ´´composer init´´ é o comando para iniciar um projeto com o composer.
     *
     * Após executar este comando o composer irá fazer algumas perguntas como: 
     *      o nome do pacote (normalmente o nome dos pacotes são dados da seguinte forma: <vendor>/<name>, sendo o vendor o nome de quem esta distribuindo esse pacote e *      name o nome do pacote)
     * 
     *      descrição do pacote 
     * 
     *      Autor do pacote 
     * 
     *      estabilidade minima 
     * 
     *      Tipo de pacote: se for uma aplicação inteira rodando, ele será um project, caso seja apenas uma biblioteca que será utilizada para complementar um projeto ela
     *      será uma library
     * 
     *      Licença do pacote/projeto 
     * 
     *      Dependencias do pacote/projeto 
     * 
     *      Dependencias de desenvolvimentos
     * 
     * Com isso será criado um arquivo composer.json com os dados que foram preenchidos na linha de comando
     *      
     */ 