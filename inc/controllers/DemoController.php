<?php

    class DemoController {

        public static function main(\Slim\Http\Request $request, \Slim\Http\Response $response){
            //echo '<pre>'.print_r($request,true).'</pre>';
            $response->getBody()->write('it works');
            //$app->response->getBody()->write('hello');
            return $response;
        }

    }