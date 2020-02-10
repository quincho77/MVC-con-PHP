<?php

class NuevoModel extends Model
{
    public function __construct() 
    {
        parent::__construct();
    }// fin del constructor de NuevoModel
    
    public function insert($datos)
    {
        // insertar datos en la base de datos
        $query = $this->db->connect()->prepare(
                'INSERT INTO ALUMNOS (MATRICULA, NOMBRE, APELLIDO) VALUES (:matricula, :nombre, :apellido)');
        try 
        {
            $query->execute(['matricula' => $datos['matricula'], 'nombre' => $datos['nombre'], 'apellido' => $datos['apellido']]);
            return true;
        }
        catch(PDOException $e)
        {
            //echo "Ya existe esa matricula";
            return false;
        }
    }
}// fin de la clase NuevoModel


