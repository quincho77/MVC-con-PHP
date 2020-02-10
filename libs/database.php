<?php

class Database
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    
    public function __construct()
    {
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }// fin del constructor
    
    function connect() 
    {
        try
        {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        }// fin de try
        catch (PDOException $e)
        {
            print_r('Error connection: ' . $e->getMessage());
        }
    }// fin de la funcion connect
}// fin de la clase Database

