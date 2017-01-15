<?php

    require __DIR__.'/../vendor/autoload.php';


    class Application {


        private static $instance;

        public static function getInstance(){
            if(self::$instance == null){
                self::$instance = new \Slim\App();
            }
            return self::$instance;
        }



    }


    $dhc = opendir( __DIR__.'/controllers' );
    while($i = readdir($dhc)){
        if($i != '.' && $i != '..'){
            include __DIR__.'/controllers/'.$i;
        }
    }
    closedir($dhc);

