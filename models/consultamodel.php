<?php

include_once 'models/alumno.php';

class ConsultaModel extends Model
{
    public function __construct() 
    {
        parent::__construct();
    }// fin del constructor de NuevoModel
    
    public function get()
    {
        $items = [];
        $row = [];
        try
        {
            $query = $this->db->connect()->query("SELECT * FROM Alumnos");
            
            while ($row = $query->fetch())
            {
                $item = new Alumno();
                $item->matricula = $row['matricula'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
                
                array_push($items, $item);
            }
            
            return $items;
        }
        catch (PDOException $e)
        {
            return [];
        }
    }// fin del metodo get
}// fin de la clase NuevoModel


