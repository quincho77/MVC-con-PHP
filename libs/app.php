<?php

require_once 'controllers/error.php';

class App
{
    function __construct() 
    {
        //echo "<p>Nueva app</p>";
        
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        
        //echo $url;
        //var_dump($url);
        
        if (empty($url[0]))
        {
            $fileController = 'controllers/main.php';
            require_once $fileController;
            $controller = new Main();
            return false;
        }// fin del if
        
        $fileController = 'controllers/' . $url[0] . '.php';
        
        if (file_exists($fileController))
        {
            require_once $fileController;
            $controller = new $url[0];   // el '$url[0]' es un strin con el nombre del controlador en este caso 'main'
            
            if (isset($url[1]))
            {
                $controller->{$url[1]}();
            }// fin del if
        }// fin de if
        
        else 
        {
            $controller = new Errorr();
        }// fin del else
        
    }// fin del constructor
    
}// fin de la clase App

