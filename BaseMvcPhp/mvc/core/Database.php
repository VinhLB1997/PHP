<?php
class Database
{
    public $conn = null;
    private $__serverName = 'localhost';
    private $__username = 'root';
    private $__password = '';
    private $__dbName = 'challenge';

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->__serverName;dbname=$this->__dbName", $this->__username, $this->__password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
