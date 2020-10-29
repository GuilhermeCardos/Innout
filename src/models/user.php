<?php
    require_once(realpath(MODEL_PATH . '/model.php'));
    
    class User extends Model {

        protected static $tablename='users';
        protected static $colums = ['id','name','password','email','star_date','end_date','is_admin'];

    }