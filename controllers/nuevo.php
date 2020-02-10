<?php

class Nuevo extends Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->view->mensaje = "";
        //echo "<p>Nuevo controlador Main</p>";
    }// fin del constructor
    
    function render()
    {
        $this->view->render('nuevo/index');
    }// fin del metodo render
    
    function registrarAlumno()
    {
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        
        $mensaje = "";
        
        if ($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido]))
        {
            $mensaje = "Nuevo alumno creado";
        }// fin del if
        
        else
        {
            $mensaje = "La matríula ya existe";
        }// fin del else
        
        $this->view->mensaje = $mensaje;
        $this->render();
    }// fin del metodo registrarNuevoAlumno
    
}// fin de la clase Main