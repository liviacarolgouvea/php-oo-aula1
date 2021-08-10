<?php

class Conn
{
    public $username = 'root';
    public $password = 'root';
    public $dsn = "mysql:dbname=php_oo;host=localhost";
    public $connect = null;
    
    public function connect()
    {
        try {
            $this->connect = new PDO($this->dsn, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            
            return $this->connect;
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
