<?php

class Main extends Controller
{
    function __construct() 
    {
        parent::__construct();
        
        //echo "<p>Nuevo controlador Main</p>";
    }// fin del constructor
    
    function render()
    {
        $this->view->render('main/index');
    }// fin del metodo render
    
    function saludo()
    {
        echo "<p>Ejecutaste el método Saludo</p>";
    }
}// fin de la clase Main

