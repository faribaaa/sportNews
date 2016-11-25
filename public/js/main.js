
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

function do_regestr() {

    var u = document.getElementById('username');
    var p1 = document.getElementById('pass1');
    var p2 = document.getElementById('pass2');
    var m = document.getElementById('mail');
    var c = document.getElementById('city');
    var g1 = document.getElementById('gender1');
    var g2 = document.getElementById('gender2');
    var c1 = document.getElementById('chek');


    if(u.value ==""){
        alert("لطفا نام کاربری را وارد کنید.");
        u.focus();
        return false;
    }
    else if(p1.value ==""){
        alert("لطفا کلمه عبور را وارد کنید.");
        p1.focus();
        return false;
    }
    else if(p1.value != p2.value){
        alert(" کلمه عبور یکسان نیست.");
        p2.focus();
        return false;
    }
    else if(m.value == ""){
        alert(" لطفا ایمیل را وارد کنید.");
        p2.focus();
        return false;
    }
    else if(filter.test(m.value) == false){
        alert("آدرس پست الکترونیک معتبر نمیباشد.");
        m.focus();
        return false;
    }
    else if(!g1.checked && !g2.checked){
        alert(" لطفا جنسیت را انتخاب  کنید.");
        g1.focus();
        return false;
    }
    else if(c.value==0){
        alert(" لطفا شهر را وارد کنید.");
        c.focus();
        return false;
    }
    else if(!c1.checked){
        alert(" لطفا قوانین را انتخاب کنید.");
        c1.focus();
        return false;
    }

}