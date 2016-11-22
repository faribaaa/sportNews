<?php
if (isset($_post['register']))
{
$user =$_POST['username'];
$pas =$_POST['pass1'];
$email =$_POST['mail'];
$gender =$_POST['gender'];
$city =$_POST['city'];

    $result = $main ->register($user,$pas,$email,$gender,$city);

}

?>

<html>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="form1 form-group" onsubmit="return do_regestr();">
                <form method="get" class="formi">
                    <label><b >  فرم عضویت</b></label>
                    <input class="form-control" type="text" id="username" name="" placeholder="نام">
                    <input class="form-control" type="password" id="pass1" name="pass1" placeholder="کلمه عبور">
                    <input class="form-control" type="password" id="pass2" name="pass2" placeholder="تکرار کلمه عبور">
                    <input class="form-control" type="text" id="mail" name="mail" placeholder="ایمیل">
                    <h4>جنسیت :</h4>
                    مرد: <input type="radio" id="gender1" name="gender" value="1">
                    زن:               <input type="radio" id="gender2" name="gender" value="0"><br>
                    <h4>شهر:</h4>
                    <select id="city" name="city">
                        <option value="0">شهر مورد نظر را انتخاب کنبد</option>
                        <option value="1">تهران</option>
                        <option value="2">شیراز</option>
                        <option value="3">اهواز</option>
                    </select>
                    <br>
                    <label>قوانین را قبول دارم</label>
                    <input type="checkbox" id="chek" name="chekb">
                    <input class="btn btn-info"type="submit" id="sub" name="sub" value="ثبت نام">
                    <input class="btn btn-info"type="reset" id="res" name="res">
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <قسمت2></قسمت2>
        </div>
        <div class="col-lg-3">
            <قسمت3></قسمت3>
        </div>
    </div>
</div>
</body>
</html>