<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 24.08.2018
 * Time: 22:34
 */

namespace engineMVC\core;

    class Router {
        protected $rotes = [];
        protected $params = [];

    public function __construct() {
            $arr = require 'config/routes.php';

            foreach ($arr as $key => $value) {
                $this->add ($key, $value);
            }

        //  debug($arr);
        }


     //adding a route

     public function add($route, $params) {
        // work through regular expressions
         $route ='#^'.$route.'$#';
         $this->rotes[$route] = $params;
     }

     //function test a route

     public function match() {
        // debug($_SERVER);
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->rotes as $route => $params){
            // debug($params);
            if (preg_match($route, $url, $matches)) {
                // var_dump($params);
                $this->params = $params;
                return true;

            }
        }
        return false;
     }

     //launching a route

     public function run(){
       if ($this->match()) {
                $controller = 'engineMVC\сontrollers\\'.ucfirst($this->params[$controller]).'Controller.php';
                if (class_exists($controller)) {
                    echo 'Ok';
                }else{
                    echo 'Errors: '.$controller;
                }
           }
           else{
               echo 'Errors controller';
           }
        }
    }
