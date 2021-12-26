<?php
function dangnhap(){
    $ngay=date('H:i d/m/Y');
    echo "<div style='width:400px; height:200px; border:1px solid blue; padding:15px 30px;'>
        <p style='line-height: 30px;background-color: #f2f2f2;'>Bây giờ là:$ngay </p>
        <div style='display:flex; justify-content: space-between; margin-bottom: 10px;'>
            <p style='background-color: #accdea;text-align:center;margin: 0px; line-height: 30px;width: 45%;'>Tên đăng nhập</p>
            <input style='border:1px solid blue; width: 45%;'>
        </div>
        <div style='display:flex; justify-content: space-between;margin-bottom: 10px;'>
            <p style='background-color: #accdea;text-align:center;margin: 0px; line-height: 30px;width: 45%;'>Mật khẩu</p>
            <input style='border:1px solid blue; width: 45%;'>
        </div>
        <div style='background-color: #accdea; border-radius:10px;width: 100px; line-height: 40px; margin: auto;text-align: center;'>Đăng nhập</div></div>
    ";
}
dangnhap();
?>