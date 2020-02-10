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
        
        // cuando se ingresa sin definir controladord
        if (empty($url[0]))
        {
            $fileController = 'controllers/main.php';
            require_once $fileController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }// fin del if
        
        $fileController = 'controllers/' . $url[0] . '.php';
        
        if (file_exists($fileController))
        {
            require_once $fileController;
            
            // inicializar controlador
            $controller = new $url[0];   // el '$url[0]' es un string con el nombre del controlador en este caso 'main'
            $controller->loadModel($url[0]);
            
            if (isset($url[1]))
            {
                $controller->{$url[1]}();
            }// fin del if
            
            else
            {
                $controller->render();
            }// fin del else 
        }// fin de if
        
        else 
        {
            $controller = new Errorr();
        }// fin del else
        
    }// fin del constructor
    
}// fin de la clase App

