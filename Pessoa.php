<?php

require './Conn.php';

class Pessoa
{
    public int $id;
    public string $nome;
    public string $telefone;
    public string $email;
    
    public function __construct($id)
    {
        $this->id = $id;
    }
    
    public function verDados():object
    {
        $conn = new Conn();
        $conectar = $conn->connect();
        
        $sql = "SELECT nome, telefone, email
                FROM php_oo.pessoa
                WHERE id = :id";

        $result = $conectar->prepare($sql);
        $result->execute(array(':id' => $this->id));
        
        return $result->fetchObject();
        
    }
}