<?php

class View
{
    function __construct() 
    {
        echo "<p>Vista base</p>";
    }// fin del constructor
    
    function render($nombre)
    {
        require 'views/' . $nombre . '.php';
    }// fin del metodo render
    
}// fin de la clase Controller

