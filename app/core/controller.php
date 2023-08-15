<?php

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database ;

class controller
{

    public function view($path,$param){
        extract($param);
        require_once(VIEW.$path.".php");
    }

    public function db(){
        $options = [
            //required
            'username' => 'root',
            'database' => 'test',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => '',
            'port' => '3306'
        ];
        
       return  $db = new Database($options);
    }
}
