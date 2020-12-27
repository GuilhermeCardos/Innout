<?php
    // __FILE__(Local Atual)'2'-quantidade de vezes que irá voltar/sair do diretorio. 
    require_once(dirname(__FILE__, 2) . '/src/config/config.php');

    //importou a classe User
    require_once(dirname(__FILE__, 2) . '/src/models/user.php');

    /*
        $sql='SELECT * FROM users';
        $result = Database::getResultFromQuery($sql); // Por ser um método estático 

        //                     array associativo
        while ($row = $result-> fetch_assoc()){
            print_r($row);
            echo'<br>';
        }
    */

    /* 
         print_r($user);
         echo"<br><br>";
         $user->email="Guilherme.czNew@gmail.com";
         print_r($user->email);
         echo '<br><br>Fim';
     */
    
    $user = new User(['name'=>'Guilherme', 'email'=> 'guilherme.cz@gmail.com']);
    //echo $user->getSelect();
    echo User::getSelect(['name'=>'Chaves'], 'id, email');