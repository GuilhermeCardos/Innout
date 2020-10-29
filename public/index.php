<?php
    //                   __FILE__(Local Atual)'2'-quantidade de vezes que irá voltar/sair do diretorio. 
    require_once(dirname(__FILE__, 2) . '/src/config/config.php');

    require_once(dirname(__FILE__, 2) . '/src/models/user.php');
    //importou a classe User

    /*
        $sql='SELECT * FROM users';
        $result = Database::getResultFromQuery($sql); // Por ser um método estático 

        //                     array associativo
        while ($row = $result-> fetch_assoc()){
            print_r($row);
            echo'<br>';
        }
    */

    $user = new User(['name'=>'Guilherme', 'email'=> 'guilherme.cz@gmail.com']);
    print_r($user);
    echo"<br><br>";
    $user->email="Guilherme.czNew@gmail.com";
    print_r($user->email);


    echo '<br><br>Fim';
    
    