<?php
    class Model
    {
        protected static $tablename= '';
        protected static $colums = [];
        protected $values=[];

        function __construct($arr)
        {
            $this -> loadFromArray($arr);
        } 

        public function loadFromArray($arr)
        {
            if($arr)
            {
                foreach($arr as $key => $value)
                {
                    $this->$key = $value;
                }
            }
        }
        
        public function __get($key)
        {
            return $this-> values[$key];
        }
        public function __set ($key, $value)
        {
            $this-> values[$key] = $value;
        }
        
        public static function getSelect($filters =[], $columns='*')
        {
            $sql = "SELECT {$columns} FROM ". static:: $tableName;
            return $sql;
        }
        
    }
?>