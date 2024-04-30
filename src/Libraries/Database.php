<?php

namespace App\Libraries;

use App\Libraries\Config;

class Database
{
    protected $mysqli;
    protected $query;
    protected $params = [];
    protected $config;

    public function __construct()
    {
        $this->config = new Config;
    }

    public function connect()
    {
        $host = $this->config->get('Database.hostname');
        $dbname = $this->config->get('Database.database');
        $username = $this->config->get('Database.username');
        $password = $this->config->get('Database.password');

        $this->mysqli = new \mysqli($host, $username, $password, $dbname);

        if ($this->mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
            exit();
        }
    }

    public function select($select = '*')
    {
        $this->query = "SELECT $select ";
        return $this;
    }

    public function from($table)
    {
        $this->query .= "FROM $table ";
        return $this;
    }

    public function where($column, $value)
    {
        if (!$this->mysqli) {
            $this->connect();
        }

        $value = $this->mysqli->real_escape_string($value);
        $this->query .= "WHERE $column = '$value' ";
        return $this;
    }


    public function getOne($key = null)
    {
        if (!$this->mysqli) {
            $this->connect();
        }

        $result = $this->mysqli->query($this->query);

        if (!empty($result->num_rows) && $result->num_rows > 0) {
            $data = $result->fetch_object();
            if (!empty($key) && isset($data->$key)) {
                return $data->$key;
            } else {
                return $data;
            }
        } else {
            return null;
        }
    }

    public function getAll()
    {
        if (!$this->mysqli) {
            $this->connect();
        }

        $result = $this->mysqli->query($this->query);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($table, $data)
    {
        if (!$this->mysqli) {
            $this->connect();
        }

        $columns = implode(', ', array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        if ($this->mysqli->query($sql) === TRUE) {
            return $this->mysqli->insert_id;
        } else {
            echo "Error: " . $sql . "<br>" . $this->mysqli->error;
            return false;
        }
    }

    public function update($table, $data, $id)
    {
        if (!$this->mysqli) {
            $this->connect();
        }

        $set = '';
        foreach ($data as $column => $value) {
            $value = $this->mysqli->real_escape_string($value);
            $set .= "$column = '$value', ";
        }
        $set = rtrim($set, ', ');

        $sql = "UPDATE $table SET $set WHERE id = $id";

        if ($this->mysqli->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->mysqli->error;
            return false;
        }
    }

    public function delete($table, $id)
    {
        if (!$this->mysqli) {
            $this->connect();
        }

        $sql = "DELETE FROM $table WHERE id = $id";

        if ($this->mysqli->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->mysqli->error;
            return false;
        }
    }
}
