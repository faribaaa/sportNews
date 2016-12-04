<?php
//include 'headContent.php';
//include 'Classes/post.php';
//$allPost = new Posts();
//var_dump($allPost->getAll());
?>

<html>
<head>
    <title>sportNews</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet" >
    <link href="public/css/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="public/css/bootstrap-rtl.min.css" rel="stylesheet">
</head>
<body>
<?php
include "header.php";
include "footer.php";
?>
<script src="public/js/jquery-3.0.0.min.js"></script>
<script src="public/js/main.js"></script>
<script src="public/js/bootstrap.min.js" type="text/javascript" ></script>

<div id="nav-fix-clear"></div>
<div class="row">
    <div class="container">
        <div class="col-lg-2">
            <div class="box_menu_left">
                <ul class="nav navbar-collapse" id="txt_menu_right">
                    <li><a href="#"> جدول پخش یرنامه ها</a> </li>
                    <hr>
                    <li><a href="#">  برنامه های تخصصی</a> </li>
                    <hr>
                    <li><a href="#"> ویدوئوها</a> </li>
                    <hr>
                    <li><a href="#">  راه ها ی ارتباطی</a> </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="box_menu_center">
                <div class="slide_show">
                    <div id="top_slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#top_slider" data-slide-to="0" class="active"></li>
                            <li data-target="#top_slider" data-slide-to="1" class="active"></li>
                            <li data-target="#top_slider" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="public/images/avatar/ronaldo.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="item">
                                <img src="public/images/avatar/zinedine.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="item">
                                <img src="public/images/avatar/pele.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="box_menu_right">
                <ul class="nav navbar-collapse" id="txt_menu_left">
                    <li><a href="#">رویدادهای ورزشی</a> </li>
                    <hr>
                    <li><a href="#">بسکتبال حرفه ای</a> </li>
                    <hr>
                    <li><a href="#">لیگ بسکتبال</a> </li>
                    <hr>
                    <li><a href="#">فوتبال انگلستان</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>