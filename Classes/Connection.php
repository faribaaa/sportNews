<?php

class Connection
{
    public function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = 'test';
        $conn = new mysqli($servername, $username, $password, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

}