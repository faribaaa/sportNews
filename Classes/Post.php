<?php

class Posts
{
    public $con = '';

    public function __construct()
    {
        $connect = new Connection();
        $this->con = $connect->connect();
    }

    public function getAll()
    {
        $result = mysqli_query($this->con, "SELECT * FROM tbl_user");
        return mysqli_fetch_array($result);
    }


}