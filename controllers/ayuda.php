<?php

class Ayuda extends Controller
{
    function __construct() 
    {
        parent::__construct();
    }
    
    function render()
    {
        $this->view->render('ayuda/index');
    }// fin del metodo render
}// fin de la clase Ayuda

