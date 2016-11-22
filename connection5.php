

<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test"  );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "دیتابیس متصل است";
}
catch(PDOException $e)
{
    echo "متصل نشد : " . $e->getMessage();
}

?>