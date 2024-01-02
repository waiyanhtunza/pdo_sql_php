<?php

use PDO;
use PDOException;

class Database{
   
    public function __construct(){
        try {
            $dsn = "mysql:host=localhost;dbname=auth;charset=utf8mb4;port=3306";
            $pdo = new PDO($dsn, 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            echo ''. $e->getMessage();
        }
    }

    public function connect(){
    
    }
}

