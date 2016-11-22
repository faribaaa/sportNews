<?php
class test{
    public $db;

function __construct()
{

    $this->db=mysqli_connect("localhost","root","");
//    mysqli_query("")
    $this->db = mysqli_connect("localhost","root","") or die ("can not connect to my sql");
    mysqli_query("SET NAMES 'utf8'",$this->db);
    mysqli_select_db("test",$this->db) or die("can not select data base");
}


function register($user,$pass,$email,$gender,$city){
    $q = "INSERT INTO `tbl_user` VALUES (NULL, '$user', '$pass', '$email', '$gender', '$city')";
    mysqli_query($q,$this->db);
}
}//--end of class
?>