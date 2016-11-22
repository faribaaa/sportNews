<?php

$mysqli = new mysqli("localhost", "root","");

/* check connection */
if (mysqli_connect_error()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    echo "connect error";
    exit();
}

$query = "SELECT * FROM tbl_user";
$result = $mysqli->query($query);
var_dump($result);
/* close connection */
$mysqli->close();
?>