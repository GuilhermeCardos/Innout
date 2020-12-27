<?php
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');


//__Constante que representarão Pastas__//

    define('MODEL_PATH', realpath(dirname(__FILE__). '/../models'));
    // A constante MODEL_PATH ira representar todos os modelos('MODEL');


    require_once(realpath(dirname(__FILE__).'/database.php'));
    // Carregando o Banco de Dados Apartir do Config.