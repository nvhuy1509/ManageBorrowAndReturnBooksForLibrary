<?php
function login()
{
    $date=date('H:i d/m/Y');
    echo "
    <div style='
        width:340px; 
        height:220px;
        border:1px solid  #5b9bd5; 
        padding:20px 80px;
        font-family: Arial, Helvetica, sans-serif;
        font-size:14px;
        color:#000000;
        margin:100px auto;
    '>
        
        <p style='
        line-height: 30px;
        background-color: #f5f5f5;
        padding-left:10px;
        '>
            Bây giờ là: $date
        </p>
        <div style='
        display:flex; 
        justify-content: space-between;
        margin-bottom: 16px;
        '>
            <p style='
            background-color: #5b9bd5;
            margin: 0px; 
            line-height: 35px;
            width:47%;
            padding-left:10px;
            '>
                Tên đăng nhập
            </p>
            <input style='
            border:1px solid  #5b9bd5; 
            width: 47%;
            '>
        </div>
        <div style='
        display:flex; 
        justify-content: space-between;
        '>
            <p style='
            background-color: #5b9bd5;
            margin: 0px; 
            line-height: 35px;
            width: 47%;
            padding-left:10px;
            '>
                Mật khẩu
            </p>
            <input style='
            border:1px solid  #5b9bd5;
            width: 47%;
            '>
        </div>
        <div style='text-align:center;'>
            <button style='
            background-color: #5b9bd5;
            border:none; 
            border-radius: 8px;
            width: 150px;  
            line-height: 40px;
            margin-top:30px;
            text-align: center;'>
                Đăng nhập
            </button>
        </div>
    </div>
    ";
}
login();
?>