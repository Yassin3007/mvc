<?php 

namespace MVC\core ;

class app{

    private $controller ;
    private $method ; 

    private $params ;


    public function __construct(){

        $this->url();
        $this->render() ;
    }

    private function url(){
        if(! empty($_SERVER['QUERY_STRING'])){

            $url = explode("/",$_SERVER['QUERY_STRING'] );
            
            //controller var
            $this->controller = isset($url[0])? $url[0].'controller' : 'homecontroller' ;
            
            //menthod var
            $this->method = isset($url[1])? $url[1] : 'index' ;

            // params var 
            unset($url[0],$url[1]);
            $this->params = array_values($url);

           
        }
        

    }

    private function render(){
        $controller = 'MVC\controllers\\'.$this->controller ;
        if(class_exists($controller)){
            $controller = new $controller ;
            if(method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method],$this->params)  ;
            }else{
                echo "Method not found" . PHP_EOL;
            }
           
        }else {
            echo 'this class is not exist' ;
        }
    }
}


?>