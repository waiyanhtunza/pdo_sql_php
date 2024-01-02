<?php   
require "functions.php";
use PDO;
use PDOException;
class Database {
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $connection;

    private $port;

    public $statement;

    

    public function __construct($host, $db_name,$port, $username, $password) {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;
        
    }

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name}";

            $this->connection = new PDO($dsn, $this->username, $this->password);

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function query($query,$params = []){
        
        $this->statement= $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
        
    }

    public function getAll(){
       return $this->statement->fetchAll();
    }

    public function get(){
        return $this->statement->fetch();
    }
}

