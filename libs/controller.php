<?php

class Controller
{
    function __construct() 
    {
        //echo "<p>Controlador base</p>";
        $this->view = new View();
    }// fin del constructor
    
    function loadModel($model)
    {
        $url = 'models/' . $model . 'model.php';
        
        if (file_exists($url))
        {
            require $url;
            
            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }// fin de if
    }// fin del funcion loadModel
    
}// fin de la clase Controller

