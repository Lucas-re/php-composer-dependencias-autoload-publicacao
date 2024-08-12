<?php
    /**
     * Podemos informar que o arquivo BuscarCursos.php vai poder ser utilizado como um aruivo binário e poderá ser executado 
     * com o comando ´´´ vendor/bin <nome_do_arquivo>
     * 
     * Podemos adicionar, no arquivo composer.json, a instrução binaria para execução de um arquivo, e isso ja funcionaria executando o comando:
     * vendor/bin/buscar-cursos.php
     * 
     * "bin": [
     *      "buscar-cursos.php"
     *  ]
     * 
     * Mas para podermos executar este arquivo com o comando vendor/bin/buscar-cursos é adicionar no inincio do arquivo, onde esse arquivo é importado, 
     * a seguinte informação: #!/usr/bin/env php antes da tag do php
     * 
     * A cerquilha com a exclamação indica que estamos informando qual programa vai ler esse arquivo e o restante indica que todo o progrma vai ser lido
     * pelo php 
     */