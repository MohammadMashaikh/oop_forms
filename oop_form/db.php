<?php


class DB
{

    public $connection;

    public function __construct()
    {
        $localhost = "localhost";
        $username = "root";
        $password = "";
        $database = "students";

        $this->connection = new mysqli($localhost, $username, $password, $database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }

    // public function __destruct()
    // {
    //     $this->connection->close();
    // }

    public function submit_query($sql)
    {
        return $this->connection->query($sql);
    }
}
