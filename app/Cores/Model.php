<?php

namespace App\Cores;

use App\Cores\Connection;

class Model extends Connection
{
    protected $table;
    protected $primaryKey;
    protected $fillabel = [];
    protected $attributes = [];

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

}