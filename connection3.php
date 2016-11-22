
<?php
$mysqli = new mysqli("localhost", "root", "");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM  tbl_user";

if ($result = $mysqli->query($query)) {

    /* fetch object array */
    while ($obj = $result->fetch_object()) {
        printf ("%s (%s)\n", $obj->username, $obj->email);
    }

    /* free result set */
    $result->close();
}

/* close connection */
$mysqli->close();
?>