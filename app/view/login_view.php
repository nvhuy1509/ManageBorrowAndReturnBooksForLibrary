<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Đăng nhập</title>
    <link rel="shortcut icon" href="<?php echo FULL_SITE_ROOT ?>web/images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>web/css/animate.css">
	<link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>web/css/style2.css">
	<script src="<?php echo FULL_SITE_ROOT ?>web/js/jquery-1.12.0.min.js"></script>
</head>
<body>
	<div class="container">
        <div class="login-box" style="max-width:340px">
            <form action="" method="POST" >
                <div class="box-header">
                    <h2>Đăng nhập</h2>
                </div>
                <label for="username">Tên đăng nhập</label>
                <br/>
                <input type="text" name="username" id="username">
                <br/>
                <label for="password">Mật khẩu</label>
                <br/>
                <input type="password" name="password" id="password">
                <br/>
                <input type="submit" name="btn_submit" value="Đăng nhập"/>
            </form>
            <a class="btn btn-default" title="Forget Password" href="index.php?url=userRS&method=getView">Quên Password</a>
        </div>
	</div>
</body>
</html>