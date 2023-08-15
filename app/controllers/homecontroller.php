<?php 


namespace MVC\controllers ;
use MVC\core\controller;
class homecontroller extends controller {

    public  function index(){
        $data = $this->db()->rows("select * FROM bids");
        echo "<pre>";
        var_dump($data);die;
        $title = 'yassin';
        $this->view('/home/index',['title'=>$title]);
    }


}