<?php

namespace App\Cores;

use App\Cores\Connection;

class Model extends Connection
{
    protected $table;
    protected $primaryKey;
    protected $fillable = [];

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function create($data = [])
    {
        $attributes = [];
        foreach ($data as $key => $value) {
            if (in_array($key,$this->fillable)) {
               $attributes[$key] = $value;
            }
        }

        $columns = array_keys($attributes);
        $values = array_values($attributes);

        $placeholder = array_fill(0, count($columns), '?'); // output ['?','?','?']

        $sql = "INSERT INTO {$this->table} (".implode(', ',$columns).") VALUES (".implode(', ',$placeholder).")"; 

        $stmt = $this->connect->prepare($sql);

        return $stmt->execute($values);
        
    }

}