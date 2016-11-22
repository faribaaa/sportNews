<?php
//$con=mysqli_connect("localhost","root","") or die("can not connect");
//$db=mysqli_select_db($con,'test')or die("can not found database");
//$query = ;
//$query="INSERT INTO `tbl_user` VALUES (NULL, '$user', '$pass', '$email', '$gender', '$city');"

//$row =  mysqli_query("SELECT * FROM tbl_user",$con);
//$row = mysqli_fetch_array($result);
?>

<?php
$servername = "localhost";
$dbname = "test";
$user = "root";
$pass = "";
$dblink = mysqli_connect($servername, $user, $pass);
mysqli_select_db($dbname, $dblink);
$dbresult = mysqli_query("select * from tbl_user", $dblink);
$rcount = mysqli_num_rows($dbresult);
print ($rcount);
mysqli_close($dblink);
?>
