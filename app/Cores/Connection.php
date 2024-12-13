<?php

namespace App\Cores;

class Connection {
    protected $host = '127.0.0.1';
    protected $db = 'mvc';
    protected $username = 'root';
    protected $password = 'rootpassword';
    protected $connect;

    public function __construct(){
        try {
            $rule = "mysql:host={$this->host};dbname={$this->db}";
            $pdo = new \PDO($rule,$this->username,$this->password,[
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        } catch (\PDOException $e) {
            throw "Connection Error: {$e->getMessage()}";
        }


        $this->connect = $pdo;
    }
}