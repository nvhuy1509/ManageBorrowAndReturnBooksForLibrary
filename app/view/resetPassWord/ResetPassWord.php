<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cấp lại mật khẩu</title>
    <link rel="shortcut icon" href="<?php echo FULL_SITE_ROOT ?>web/images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>web/css/animate.css">
	<link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>web/css/style2.css">
	<script src="<?php echo FULL_SITE_ROOT ?>web/js/jquery-1.12.0.min.js"></script>
</head>
<body>
	<div class="container">
        <div class="login-box" style="max-width:340px">
            <form action="?url=userRS&method=submitRequestResetPass" method="POST" >
                <div class="box-header">
                    <h2>Cấp lại mật khẩu</h2>
                </div>
                <label for="user_login">Người dùng</label>
                <br/>
                <input type="text" name="user_login" id="user_login">
                <br/>
                <input type="submit" value="Gửi yêu cầu reset password"/>
            </form>
            <div style="color:red">
              <?php echo isset($error['user_login'])?$error['user_login']:"" ?>
            </div>
            <a class="btn btn-default" title="Trở về trang đăng nhập" href="index.php?url=userRS&method=getBacktoLogin">Trở về trang đăng nhập</a>
        </div>
	</div>
</body>
</html>
