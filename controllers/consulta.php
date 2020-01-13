<?php

class Consulta extends Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->view->render('consulta/index');
        //echo "<p>Nuevo controlador Main</p>";
    }// fin del constructor

}// fin de la clase Main