<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="register.css"/>
</head>
<script>
            function getValue(id){
                return document.getElementById(id).value.trim();
            }

            function showError(key, mess){
                document.getElementById(key + '_error').innerHTML = mess;
            }

            function validate()
            {
                var flag = true;


                var username = getValue('username');
                if (username == '' || username.length < 5 || !/^[a-zA-Z0-9]+$/.test(username)){
                    flag = false;
                    showError('username', 'Vui lòng kiểm tra lại Username');
                }


                var password = getValue('password');
                if (password == '' || password.length < 8 ){
                    flag = false;
                    showError('password', 'Vui lòng kiểm tra lại Password');
                }

                var phone = getValue('phone');
                if (phone == '' || phone.length < 10 ){
                    flag = false;
                    showError('phone', 'Vui lòng kiểm tra lại SĐT');
                }

                return flag;
            }
</script>
<body style="
      background-image: url(https://i.pinimg.com/originals/96/5a/dc/965adc8800cbb3310756f37dcefb771d.jpg);
      background-size: cover; ">
<div class="phancuoi" style="background:#16a085; font-size:19px; color:#fff;">
    <h1 class="xinchao">Welcome</h1>
</div>

<form method="post" action="register.php" class="form" style="background-color: #ecf0f1">

<h2 style="text-align: center;">Đăng ký thành viên</h2>

<input placeholder="Username" id="username" class="nhaplieu" type="text" name="username" value="" required><span id="username_error"></span>

<input placeholder="Password" id="password" class="nhaplieu" type="text" name="password" value="" required/><span id="password_error"></span>

<input placeholder="Email" id="email" class="nhaplieu" type="email" name="email" value="" required/>

<input placeholder="Phone" id="phone" class="nhaplieu" type="text" name="phone" value="" required/><span id="phone_error"></span>

<input class="nutdangky" type="submit" name="dangky" value="Đăng Ký" onclick="return validate()" id="btn">
</br>
<a>Đã có tài khoản?</a><a href="login.php">Đăng nhập đi?</a>
<?php require 'haha.php';?>
</form>
<div class="phancuoi" style="background:#16a085; font-size:19px; color:#fff;">
    <h1 class="xinchao">Made by Dung</h1>
</div>

</body>
</html>