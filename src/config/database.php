<?php

    class Database {

        public static function getConnection()
        {
            $envPath = realpath(dirname(__FILE__)."/../env.ini") ; // Local do arquivo path
            $env = parse_ini_file($envPath); // referencia do arquivo env.ini
            $conn= new mysqli($env['host'], $env['username'], $env['password'], $env['database']);

            if($conn->connect_error)//Mensagem de erro, caso houver erro de conexão com o banco.
            {
                die("Erro: ". $conn->connect_error);
            }
            return $conn;
        }

        public static function getResultfromQuery($sql)
        {
            $conn = self::getConnection();
            $result = $conn-> query($sql);
            $conn->close();
            return $result;
        }
    } 