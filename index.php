<?php
include 'headContent.php';
include 'Classes/post.php';
$allPost = new Posts();
var_dump($allPost->getAll());
?>
<html>
<head>
    <title>sportNews</title>
</head>
<body>
<?php
include "header.php";
include "footer.php";
?>
</body>
</html>