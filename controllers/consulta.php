<?php

class Consulta extends Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->view->alumnos = [];
        //echo "<p>Nuevo controlador Main</p>";
    }// fin del constructor

    function render()
    {
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');
    }// fin del metodo render
}// fin de la clase Main