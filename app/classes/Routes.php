<?php

namespace app\classes;

class Routes{
    public static function load($routes, $uri){

        /*Tenho que fazer a comparação, no caso se a $uri é compativel com alguma das routes*/
        if(!array_key_exists($uri, $routes)){
            throw new \Exception("Rota não existe {$uri}");
        }

        /*Agora caso a rota existir*/
        return "../app/{$routes[$uri]}.php";


    }

}