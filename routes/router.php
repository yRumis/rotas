<?php

    function load($controller, $action)
    {
        $controllerNamespace = "app\\controllers\\{$controller}";
        if (!class_exists($controllerNamespace))
        {
            throw new Exception("o controller {$controller} nao existe");
        };

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action))
        {
            throw new Exception("o metodo {$action} nao existe no {$controller}");
        }

        $controllerInstance-> $action();
    }

$routes = [
    'GET' => [
        '/' => load("HomeController", "index"),
        '/contact' => load('ContactController', "index")

    ],
    'POST' =>[
        'contact' => load('ContactController',"store")
    ]

];

?>